<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);
$router->namespace("Source\Controller");

$router->group(null);
$router->get("/login", "UserController:index");
$router->post("/sign-in", "UserController:signIn");
$router->get("/home", "HomeController:index");

$router->group("/categoria");
$router->get("/show", "CategoriaController:index");
$router->post("/save", "CategoriaController:save");
$router->get("/get/{id}", "CategoriaController:get");

//ROTA DE ERRO
$router->group("/vish");
$router->get("/{code}", function ($data) {
    echo "<h1>Erro: " . $data["code"]."</h1>";
    var_dump($data);
});

$router->dispatch();

if ($router->error()) {
    $router->redirect("/vish/{$router->error()}");
}
