<?php

namespace Source\Controller;

use CoffeeCode\Router\Router;
use Exception;
use Source\Model\User;
use Source\View;

class UserController
{

    private $router;

    public function __construct()
    {
        $this->router = new Router(URL_BASE);
    }

    public function index()
    {
        echo View::render("login/login");
    }

    public function signIn($data)
    {
        setPostVars($data);
        try {
            $user = new User();

            if (!$user->validarLogin($data)) {
                setAlert("Preecha todos os campos!", "alert-warning");
                $this->router->redirect("/login");
            }

            $usuarioLogado = $user->find(
                "usuario = :usuario AND senha = :senha",
                "usuario=" . $data["usuario"] . "&senha=" . md5($data["senha"])
            )->fetch();

            if (!$usuarioLogado) {
                setAlert("Usuário ou senha incorretos!");
                $this->router->redirect("/login");
            }
            set("user", $usuarioLogado);
            $this->router->redirect("/home");
        } catch (Exception $e) {
            $this->router->redirect("/vish/" . $e->getCode());
        }
    }
}
