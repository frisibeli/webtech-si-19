<?php
class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    public function route($method, $path, $callback) {
        array_push($this->routes, [
            'method' => $method,
            'path' => $path,
            'callback' => $callback
        ]);
    }

    public function run(){
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['QUERY_STRING'];

        foreach($this->routes as $route){
            if($route['method'] == $method && preg_match("#$route[path]#", $path, $matches)){
                $route['callback']($matches);
                return;
            }
        }

        http_response_code(404);
        echo 404;
    }
}

