<?php
class Controller
{
    public function view($view, $params = [])
    {
        echo App::$view->render($view, $params);
    }

    public function onlyView($view, $params = [])
    {
        echo App::$view->renderOnlyView($view, $params);
    }

    public function adminView($view, $params = [])
    {
        echo App::$view->renderAdmin($view, $params);
    }

    public function model($model)
    {
        $modelPath = "../app/models/" . $model . ".php";
        if (file_exists($modelPath))
        {
            include $modelPath;
            return new $model;
        }
        throw new Exception("Model $model not found.");
    }
}
