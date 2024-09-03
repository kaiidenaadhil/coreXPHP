<?php

class App {
    public static string $ROOT_DIRECTORY;
    public static View $view;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;

    public function __construct($rootPath)
    {
        self::$ROOT_DIRECTORY = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database();
        self::$view = new View(THEME); // Instantiate View with the correct theme
    }

    public function run() {
        echo $this->router->resolve();
    }
}
