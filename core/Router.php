<?php

class Router {
    private $routes = [];

    public function get($uri, $action) {
        $this->routes["GET"][$uri] = $action;
    }

    public function post($uri, $action) {
        $this->routes["POST"][$uri] = $action;
    }

    public function run() {
        $method = $_SERVER["REQUEST_METHOD"];
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

        $base = str_replace("/index.php", "", $_SERVER["SCRIPT_NAME"]);
        $uri = str_replace($base, "", $uri);
        if ($uri == "") $uri = "/";

        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            echo "404 - Halaman tidak ditemukan";
            return;
        }

        $action = $this->routes[$method][$uri];
        $this->callAction($action);
    }

    private function callAction($action) {
        list($file, $method) = explode("@", $action);
        require_once $file . ".php";

        $className = basename($file);
        $controller = new $className();
        $controller->$method();
    }
}
