<?php

class Controller {
    protected function view($path, $data = []) {
        extract($data);

        require_once "shared/layouts/header.php";
        require_once "shared/components/navbar.php";
        require_once $path;
        require_once "shared/layouts/footer.php";
    }
}