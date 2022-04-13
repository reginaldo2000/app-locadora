<?php

namespace Source\Model;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer {

    public function __construct()
    {
        parent::__construct("users", ["usuario", "senha"], "id", false);
    }

    public function validarLogin($data): bool {
        if($data["usuario"] == "" or $data["senha"] == "") {
            return false;
        }
        return true;
    }
}