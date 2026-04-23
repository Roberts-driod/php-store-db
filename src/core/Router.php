<?php
namespace App\Core;

class Router {
    protected $routes = [];

    public function add($path, $callback) {
        $this->routes[$path] = $callback;
    }

    public function dispatch($uri) {
        $path = parse_url($uri, PHP_URL_PATH);
        
        if (isset($this->routes[$path])) {
            $callback = $this->routes[$path];
            return $callback();
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}