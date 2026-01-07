<?php

class Router {
    private $routes = [];

    public function add($method, $uri, $controller, $action) {
        $this->routes[$method][$uri] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function run() {
        $method = $_SERVER["REQUEST_METHOD"];
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

        $base = str_replace("/index.php", "", $_SERVER["SCRIPT_NAME"]);
        $uri = str_replace($base, "", $uri);
        if ($uri == "") $uri = "/";

        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            die("404 - Halaman tidak ditemukan: " . htmlspecialchars($uri));
        }

        $route = $this->routes[$method][$uri];
        $this->callAction($route['controller'], $route['action']);
    }

    private function callAction($controllerName, $method) {
        $folder = strtolower(str_replace('Controller', '', $controllerName));
        
        $path = dirname(__DIR__) . "/features/$folder/$controllerName.php";

        if (file_exists($path)) {
            require_once $path;
            if (class_exists($controllerName)) {
                $controller = new $controllerName();
                if (method_exists($controller, $method)) {
                    $controller->$method();
                } else {
                    die("Error: Method <b>$method</b> tidak ditemukan di class $controllerName");
                }
            } else {
                die("Error: Class <b>$controllerName</b> tidak ditemukan di file $path");
            }
        } else {
            die("Error: File Controller tidak ditemukan di: <b>$path</b>");
        }
    }
}