<?php

namespace App\Controllers;

use App\Core\Controller;

class LoggedController extends Controller
{
    public function index() {
        $this->view('logged');
    }
}
