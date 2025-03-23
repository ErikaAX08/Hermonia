<?php

namespace App\Controllers;
use App\Core\Controller;

class PlayerController extends Controller {
    public function index() {
        $this->view('player');
    }
}