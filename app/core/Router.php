<?php

class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback, $middlewares = [])
    {
        $this->routes['get'][$path] = ['callback' => $callback, 'middlewares' => $middlewares];
    }

    public function post($path, $callback, $middlewares = [])
    {
        $this->routes['post'][$path] = ['callback' => $callback, 'middlewares' => $middlewares];
    }

    public function put($path, $callback, $middlewares = [])
    {
        $this->routes['put'][$path] = ['callback' => $callback, 'middlewares' => $middlewares];
    }

    public function delete($path, $callback, $middlewares = [])
    {
        $this->routes['delete'][$path] = ['callback' => $callback, 'middlewares' => $middlewares];
    }


    public function resource($path, $model, $controllerClass, $middlewares = [])
    {
        $this->get("/{$path}", [$controllerClass, "{$model}Index"], $middlewares);
        $this->get("/{$path}/build", [$controllerClass, "{$model}Build"], $middlewares);
        $this->post("/{$path}/build", [$controllerClass, "{$model}Record"], $middlewares);
        $this->get("/{$path}/{{$model}Identify}/destroy", [$controllerClass, "{$model}Destroy"], $middlewares);
        $this->get("/{$path}/{{$model}Identify}/modify", [$controllerClass, "{$model}Modify"], $middlewares);
        $this->post("/{$path}/{{$model}Identify}/modify", [$controllerClass, "{$model}Edit"], $middlewares);
        $this->get("/{$path}/{{$model}Identify}", [$controllerClass, "{$model}Display"], $middlewares);
    }
    public function resolve()
    {
        $path = rtrim($this->request->getPath(), '/');
        $method = $this->request->method();
        // echo "Requested Path: $path\n";
        // echo "HTTP Method: $method\n";
        // var_dump($this->routes);
        foreach ($this->routes[$method] as $routePath => $routeInfo) {
            $routePattern = '#^' . preg_replace('/\{(.*?)\}/', '([^/]+)', $routePath) . '$#';
            if (preg_match($routePattern, $path, $matches)) {
                array_shift($matches); // Remove the full match

                $middlewares = $routeInfo['middlewares'];
                $callback = $routeInfo['callback'];

                $next = function ($request) use ($callback, $matches) {
                    if (is_string($callback)) {
                        return App::$view->render($callback, $matches);
                    }

                    if (is_array($callback)) {
                        require_once "../app/controllers/" . $callback[0] . ".php";
                        $controller = new $callback[0]();
                        return $this->invokeControllerMethod($controller, $callback[1], $matches);
                    }

                    return call_user_func_array($callback, $matches);
                };

                while ($middleware = array_shift($middlewares)) {
                    $middlewareFile = "../app/middlewares/{$middleware}.php";
                    if (file_exists($middlewareFile)) {
                        require_once $middlewareFile;
                    } else {
                        throw new Exception("Middleware file {$middlewareFile} not found.");
                    }

                    $middlewareInstance = new $middleware();
                    $next = function ($request) use ($middlewareInstance, $next) {
                        return $middlewareInstance->handle($request, $next);
                    };
                }

                return $next($this->request);
            }
        }

        $this->response->setStatusCode(404);
        return "Not Found";
    }

    private function invokeControllerMethod($controller, $methodName, $matches)
    {
        $reflectionMethod = new ReflectionMethod($controller, $methodName);
        $parameters = $reflectionMethod->getParameters();
        $args = [];

        foreach ($parameters as $param) {
            $paramName = $param->getName();
            if ($param->getClass() && $param->getClass()->name === Request::class) {
                $args[] = $this->request;
            } elseif ($param->getClass() && $param->getClass()->name === Response::class) {
                $args[] = $this->response;
            } else {
                $args[] = array_shift($matches);
            }
        }

        return $reflectionMethod->invokeArgs($controller, $args);
    }
}
