<div class="modal fade" id="modal-save-categoria" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= URL_BASE . "/categoria/save" ?>" autocomplete="off" id="form-categoria">
                    <input type="hidden" name="id" id="categoria-id" hidden>
                    <div class="form-group">
                        <label for="">Nome da Categoria:</label>
                        <input type="text" name="nome" id="categoria-nome" class="form-control text-uppercase" required>
                    </div>
                    <div class="form-group d-flex justify-content-end mt-3">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary ml-1">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>