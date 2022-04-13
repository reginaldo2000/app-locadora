<?php

namespace Source\Model;

use CoffeeCode\DataLayer\DataLayer;

class Categoria extends DataLayer
{
   
    public function __construct()
    {
        parent::__construct("categorias", ["usuario_id", "nome"]);
    }
}
