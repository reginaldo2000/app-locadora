<?php

namespace Source\Controller;

use Source\View;

class HomeController {

    public function __construct()
    {
        
    }

    public function index() {
        echo View::render("home");
    }
}