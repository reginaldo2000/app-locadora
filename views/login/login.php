<?php $this->layout("login/template", []); ?>

<div class="card card-body login-card">

    <?= alert() ?>

    <form action="<?= URL_BASE."/sign-in" ?>" method="POST" autocomplete="off">
        <div class="form-group">
            <label for="">Usuário:</label>
            <input type="text" name="usuario" class="form-control" value="<?= getPostVars("usuario") ?>">
        </div>
        <div class="form-group mt-3">
            <label for="">Senha:</label>
            <input type="password" name="senha" class="form-control">
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-primary mt-3">Acessar Sistema</button>
        </div>

    </form>
</div>