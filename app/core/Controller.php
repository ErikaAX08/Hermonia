<?php

namespace App\Core;

class Controller {
    public function view($view, $data = []) {
        $viewPath = BASE_VIEWS . $view . '_view.php';

        if (file_exists($viewPath)) {
            extract($data);
            require_once $viewPath;
        } else {
            echo "View $viewPath does not exist";
        }
    }
}