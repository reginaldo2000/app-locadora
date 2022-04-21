<?php $this->layout("template", ["section_width" => "wdt-1000"]) ?>

<?php include __DIR__ . "/includes/modal-save-categoria.php"; ?>
<?php include __DIR__ . "/includes/modal-delete-categoria.php"; ?>

<h3 class="page-sl-title">Categorias de Filmes</h3>

<?= alert() ?>

<div class="card">
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-8">
                <form method="POST" action="" autocomplete="off">
                    <div class="d-flex align-items-end">
                        <div class="form-group flex-fill mb-2">
                            <label>Nome da Categoria:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group flex-fill mb-2 ml-1">
                            <button class="btn btn-primary">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-end mt-3">
                    <button type="button" id="btn-nova-categoria" class="btn btn-success">
                        Novo Cadastro
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Nome da Categoria</th>
                        <th class="text-center" colspan="2" width="30">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($lista)) : ?>
                        <?php foreach ($lista as $item) : ?>
                            <tr>
                                <td class="text-center text-uppercase"><?= $item->nome ?></td>
                                <td class="text-center text-uppercase">
                                    <a href="#" class="text-primary" data-edit="<?= $item->id ?>">
                                        <i class="material-icons">edit</i>
                                    </a>
                                </td>
                                <td class="text-center text-uppercase">
                                    <a href="#" class="text-danger">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="3">Nenhuma categoria encontrada!</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->push("script") ?>
<script>
    let modalCategoria = document.querySelector("#modal-save-categoria");
    modalCategoria.addEventListener('shown.bs.modal', function() {
        document.getElementById("categoria-nome").focus();
    });

    document.querySelector("#btn-nova-categoria").addEventListener("click", function() {
        document.querySelectorAll("#form-categoria input").forEach(function(element) {
            element.value = "";
        });
        openModal("modal-save-categoria");
    });

    let editCategoria = document.querySelectorAll("a[data-edit]");
    editCategoria.forEach(function(element) {
        element.addEventListener("click", function() {
            let id = element.getAttribute("data-edit");
            fetch("http://localhost/locadora/categoria/get/" + id)
                .then(function(response) {
                    return response.json();
                })
                .then(function(result) {
                    document.getElementById("categoria-id").value = result.id;
                    document.getElementById("categoria-nome").value = result.nome;
                    openModal("modal-save-categoria");
                    console.log(result);
                });
        });
    });
</script>
<?php $this->end() ?>