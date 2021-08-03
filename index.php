<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Desafio - Leo Learning Brasil</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/all.min.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">

</head>

<body>
    <main>
        <?php include './layout/_header.php'; ?>
        <div class="page">
            <?php include './partials/_slider.php' ?>

            <div class="container">
                <div class="border-bottom mt-5 mb-3">
                    <h3 class="fw-bold" style="color: #555555">MEUS CURSOS</h3>
                </div>

                <div class="row pb-4">

                    <?php for ($i = 0; $i < 7; $i++) { ?>
                        <div class="col-md-3 my-3">
                            <div class="card">
                                <img src="./assets/images/curso.png">
                                <div class="card-body ">
                                    <h5 class="card-title fw-bold">Lorem Ipsum is simply</h5>
                                    <p class="card-text" style="color: #aeaeae;line-height: 20px;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                    <div class="d-grid gap-2">
                                        <a href="#" class="btn btn-success rounded-pill fw-bold">VER CURSO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="col-md-3 my-3">
                        <div class="card add-curso">
                            <i class="fas fa-folder-plus"></i>
                            <h5 class="card-title fw-bold mb-0">ADICIONAR</h5>
                            <h2 class="card-title fw-bold">CURSO</h2>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <?php include './layout/_footer.php' ?>
    <?php include './partials/_modal.php' ?>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/scripts.js"></script>
    
</body>

</html>