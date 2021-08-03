<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAdd">Adicionar curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="form-group mb-2">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Título...">
                    </div>

                    <div class="form-group my-2">
                        <label for="description">Descrição</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group my-2">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug...">
                    </div>

                    <div class="form-group my-2">
                        <label for="image" class="form-label">Imagem</label>
                        <input class="form-control" type="file" name="image" id="image">
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>