<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/" enctype="multipart/form-data">

                    <input type="hidden" name="type" value="create">

                    <div class="form-group mb-2">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Título..." required maxlength="191">
                        <small><?= $titleError ?? '' ?></small>
                    </div>

                    <div class="form-group my-2">
                        <label for="description">Descrição</label>
                        <textarea name="description" id="description" class="form-control" rows="3" required maxlength="500"></textarea>
                        <small><?= $descriptionError ?? '' ?></small>
                    </div>

                    <div class="form-group my-2">
                        <label for="image" class="form-label">Imagem</label>
                        <input class="form-control" type="file" name="image" id="image" required>
                        <small><?= $imageError ?? '' ?></small>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>