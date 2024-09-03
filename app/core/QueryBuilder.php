<?php 

class QueryBuilder
{
    protected $db;
    protected $query;
    protected $bindings = [];
    protected $whereAdded = false;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function table($table)
    {
        $this->query = "SELECT * FROM " . $this->quoteIdentifier($table);
        return $this;
    }

    public function select($columns = ['*'])
    {
        $quotedColumns = array_map([$this, 'quoteIdentifier'], $columns);
        $columns = implode(", ", $quotedColumns);
        $this->query = str_replace('*', $columns, $this->query);
        return $this;
    }

    public function where($column, $operator, $value)
    {
        $this->addWhereClause();
        $this->query .= " " . $this->quoteIdentifier($column) . " $operator :$column";
        $this->bindings[$column] = $value;
        return $this;
    }

    public function andWhere($column, $operator, $value)
    {
        $this->query .= " AND " . $this->quoteIdentifier($column) . " $operator :$column";
        $this->bindings[$column] = $value;
        return $this;
    }

    public function orWhere($column, $operator, $value)
    {
        $this->query .= " OR " . $this->quoteIdentifier($column) . " $operator :$column";
        $this->bindings[$column] = $value;
        return $this;
    }

    public function orderBy($column, $direction = 'ASC')
    {
        $this->query .= " ORDER BY " . $this->quoteIdentifier($column) . " $direction";
        return $this;
    }

    public function limit($limit)
    {
        $this->query .= " LIMIT :limit";
        $this->bindings['limit'] = (int)$limit;
        return $this;
    }

    public function offset($offset)
    {
        $this->query .= " OFFSET :offset";
        $this->bindings['offset'] = (int)$offset;
        return $this;
    }

    public function paginate($page = 1, $perPage = 15)
    {
        $offset = ($page - 1) * $perPage;
        $this->query .= " LIMIT :perPage OFFSET :offset";
        $this->bindings['perPage'] = (int)$perPage;
        $this->bindings['offset'] = (int)$offset;
        return $this;
    }

    public function search($columns, $term)
    {
        $this->addWhereClause();
        $likeTerm = "%" . $term . "%";
        $searchClauses = [];
        foreach ($columns as $column) {
            $searchClauses[] = $this->quoteIdentifier($column) . " LIKE :term";
        }
        $this->query .= " (" . implode(" OR ", $searchClauses) . ")";
        $this->bindings['term'] = $likeTerm;
        return $this;
    }

    public function join($table, $first, $operator, $second, $type = 'INNER')
    {
        $this->query .= " $type JOIN " . $this->quoteIdentifier($table) . " ON " . $this->quoteIdentifier($first) . " $operator " . $this->quoteIdentifier($second);
        return $this;
    }

    public function leftJoin($table, $first, $operator, $second)
    {
        return $this->join($table, $first, $operator, $second, 'LEFT');
    }

    public function rightJoin($table, $first, $operator, $second)
    {
        return $this->join($table, $first, $operator, $second, 'RIGHT');
    }

    public function get()
    {
        // Output the generated SQL query for debugging
        echo $this->query;

        $stmt = $this->db->prepare($this->query);
        foreach ($this->bindings as $key => $value) {
            $stmt->bindValue(":$key", $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    protected function addWhereClause()
    {
        if (!$this->whereAdded) {
            $this->query .= " WHERE";
            $this->whereAdded = true;
        } else {
            $this->query .= " AND";
        }
    }

    private function quoteIdentifier($identifier)
    {
        // Split identifiers by dot (.) for table.column format
        $parts = explode('.', $identifier);
        foreach ($parts as &$part) {
            // Add backticks around each part
            $part = "`" . str_replace("`", "``", $part) . "`";
        }
        return implode('.', $parts);
    }
}
