<div class="modal fade" id="modal-delete-categoria" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Salvar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= URL_BASE . "/categoria/delete" ?>" autocomplete="off" id="form-categoria" class="needs-validation" novalidate>
                <div class="modal-body">
                    <input type="hidden" name="id" id="categoria-id" hidden>
                    <input type="hidden" name="_method" value="DELETE">

                    <p>Tem certeza que quer excluir a categoria?</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>