<?php

namespace App\Core;

class Router {
    public function bootstrap() {
        define('BASE_PATH', __DIR__ . '/../../');
        define('BASE_VIEWS', BASE_PATH . 'app/views/');
        define('BASE_TEMPLATES', BASE_PATH . 'app/templates/');
        define('BASE_ASSETS', '/Hermonia/assets/');
        define('BASE_URL', 'http://localhost:8012/Hermonia/');

        $route = isset($_GET['route']) ? $_GET['route'] : 'home';

        $controller = ucfirst($route) . 'Controller';
        $controller = "App\\Controllers\\" . $controller;

        if (class_exists($controller)) {
            $controller = new $controller;
            $controller->index();
        } else {
            echo "page not found";
        }
    }

}