<?php ob_start() ?>
<?php if(!empty( $_SESSION['getFeeds'])){ for($i = 0; $i <= $_SESSION['getFeeds']; $i++){?>
<div class="container-fluid text-center mt-3">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0 animacion animate__animated animate__flip" animacion="1">
            <div class="card card-style-1" style="height: 100%">
                <div class="card-body">
                    <div class="icon-box icon-box-style-5">
                        <div class="icon-box-icon">
                            <img src="/imagenes/icon/architecture.svg" class="icon">
                        </div>
                        <div class="icon-box-info mt-2">
                            <div class="icon-box-info-title">
                                <h4>Conocimiento</h4>
                            </div>
                            <p class="text-color-light-3">Diseño propio y departamento de ingeniería.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }}else{ ?>
<h1>Sorry nothing to show</h1>
<?php } ?>
<?php $contenido = ob_get_clean() ?>
<?php include 'layout.php'; ?>