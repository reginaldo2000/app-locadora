<?php

namespace Source\Controller;

use Source\View;

class Web
{

    public function __construct()
    {
    }

    public function home($data)
    {
        echo View::render("home", ["title" => $data["nome"]]);
    }
}
