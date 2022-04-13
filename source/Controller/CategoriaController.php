<?php

namespace Source\Controller;

use CoffeeCode\Router\Router;
use Exception;
use Source\Model\Categoria;
use Source\Model\User;
use Source\View;

class CategoriaController
{

    /**
     * @var Router
     */
    private $router;

    public function __construct()
    {
        $this->router = new Router(URL_BASE);
    }

    public function index()
    {
        $categoria = new Categoria();
        $lista = $categoria->find()->order("nome")->fetch(true);
        echo View::render("categorias", ["lista" => $lista]);
    }

    public function save($data)
    {
        try {
            if (empty($data)) {
                setAlert("Preencha todos os campos obrigatórios!");
                $this->router->redirect("/categoria/show");
            }
            $categoria = new Categoria();
            if($data["id"] != "") {
                $categoria = $categoria->findById($data["id"]);
            }
            $categoria->usuario_id = (int) get("user")->id;
            $categoria->nome = $data["nome"];
            $categoriaId = $categoria->save();
            if (!$categoriaId) {
                setAlert("Erro ao salvar a nova categoria!");
                $this->router->redirect("/categoria/show");
            }
            setAlert("Categoria salva com sucesso!", "alert-success");
            $this->router->redirect("/categoria/show");
        } catch (Exception $e) {
            echo $e->getMessage();
            $this->router->redirect("/vish/500");
        }
    }

    public function get($data)
    {
        $categoria = new Categoria();
        $obj = $categoria->findById($data["id"]);
        echo json_encode((array) $obj->data(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
