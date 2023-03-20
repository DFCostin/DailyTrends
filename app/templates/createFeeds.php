<?php ob_start() ?>

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="justify-content-center" id="fr">
            <form class="needs-validation text-primary" id="formularioN" enctype="multipart/form-data">
                <div class="form-row ">
                    <div class="col-md-4 mb-2">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" tabindex="1" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="id">Body</label>
                    <textarea name="body" rows="6" cols="90" id="body"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Source</label>
                    <textarea name="source" rows="6" cols="90" id="source"></textarea>
                </div>
                <div class="form-row">
                    <label for="id">Publisher</label>
                    <textarea name="publisher" rows="6" cols="90" id="publisher"></textarea>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="idFiles4">Insert image </label>
                        <input class="form-control" type="file" id="image" name="image">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <input class="btn btn-success btn-lg mt-5" type="submit" name="crear" value="Crear" id="formAlt">
                    </div>
                </div>

            </form>
        </div>
        <div id="textError" class="mt-5">
            <?php if (isset($errores)) {
                echo "<p> $errores </p>";
            } ?>
        </div>
    </div>
</div>


<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php'; ?>