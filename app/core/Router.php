<?php

namespace App\Core;

class Router {
    private $config;

    public function bootstrap() {
        define('BASE_PATH', __DIR__ . '/../../');

        $this->loadConfig();

        define('BASE_VIEWS', BASE_PATH . 'app/views/');
        define('BASE_TEMPLATES', BASE_PATH . 'app/templates/');

        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'];

        $baseDir = $this->config['app']['base_dir'] ?? $this->getBaseDir($_SERVER['REQUEST_URI']);

        define('BASE_ASSETS', $baseDir . 'assets/');
        define('BASE_URL', $protocol . $host . $baseDir);

        // ✅ Manejo de solicitudes POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_SERVER['REQUEST_URI'] === $baseDir . 'login') {
                $controller = new \App\Controllers\LoginController();
                $controller->login();
                return;
            }
        }

        // Manejo de rutas GET
        $route = $_GET['route'] ?? 'home';
        $controller = ucfirst($route) . 'Controller';
        $controller = "App\\Controllers\\" . $controller;

        if (class_exists($controller)) {
            $controller = new $controller;
            $controller->index();
        } else {
            echo "Page not found";
        }
    }

    private function loadConfig() {
        $configFile = BASE_PATH . 'app/config/app.php';
        if (file_exists($configFile)) {
            $this->config = require $configFile;
        } else {
            $this->config = [
                'app' => [
                    'base_dir' => '/Hermonia/'
                ]
            ];
        }
    }

    private function getBaseDir($requestUri) {
        $pos = strpos($requestUri, 'Hermonia');
        if ($pos !== false) {
            $baseDir = substr($requestUri, 0, $pos + 8);
            return $baseDir . '/';
        }
        return '/Hermonia/';
    }
}
