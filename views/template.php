<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Locadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../resources/css/style.css">
</head>

<body>
    <!-- cabeçalho principal -->
    <header>
        <div class="d-flex justify-content-start align-items-center">
            <div class="img-logo">
                <img src="<?= "../resources/images/logo.png" ?>" alt="">
            </div>
            <h3 class="system-title">Sistema de Locação</h3>
        </div>
        <div class="d-flex justify-content-end">
            <h4 class="name-sl-user">Logado: <?= get("user")->nome_completo ?></h4>
        </div>
    </header>

    <!-- botao de controle do menu -->
    <div class="button-sl-menu">
        <span class="material-icons">
            arrow_right_alt
        </span>
    </div>

    <!-- menu de navegação principal -->
    <nav class="navbar-sl-main">
        <ul>
            <li><a href="<?= URL_BASE . "/home" ?>">Dashboard</a></li>
            <li><a href="<?= URL_BASE . "/filmes" ?>">Filmes</a></li>
            <li><a href="<?= URL_BASE . "/categorias" ?>">Categorias</a></li>
            <li><a href="">Locações</a></li>
        </ul>
    </nav>

    <!-- conteúdo principal da aplicação -->
    <div class="container-fluid">
        <section class="content-sl-main <?= ($section_width ?? "") ?>">
            <?= $this->section("content") ?>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= "../resources/js/main.js" ?>"></script>
</body>

</html>