<?php

require 'db.php';

if (!isset($_COOKIE['modalVisualized'])) {
    setcookie('modalVisualized', true, time() + (3600 * 24 * 7));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    switch ($_POST['type']) {
        case "create":
            include './app/Create.php';
            break;

        case "edit":
            include './app/Update.php';
            break;

        case "delete":
            include './app/Delete.php';
            break;

        default:
            exit;
    }
}

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

                <?php if (!empty($message)) { ?>
                    <div class="alert alert-success" role="alert">
                        <?= $message ?> </div>
                <?php } ?>

                <div class="row pb-4">

                    <?php

                    $pdo = DB::conectar();
                    $sql = 'SELECT * FROM courses ORDER BY id DESC';

                    foreach ($pdo->query($sql) as $row) {
                    ?>
                        <div class="col-md-3 my-3">
                            <div class="card">

                                <img src="./assets/uploads/<?= $row['image'] ?>" class="course-image">

                                <a href="#" class="action edit" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row['id'] ?>">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>

                                <form method="POST" action="/">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <button type="submit" class="action delete"><i class="fas fa-times-circle"></i></button>
                                </form>

                                <div class="card-body ">
                                    <h5 class="card-title fw-bold"><?= $row['title'] ?></h5>
                                    <p class="card-text" style="color: #aeaeae;line-height: 20px;"><?= $row['description'] ?></p>
                                    <div class="d-grid gap-2">
                                        <a href="/curso/<?= $row['slug'] ?>" class="btn btn-success rounded-pill fw-bold">VER CURSO</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php
                        include './partials/_modalEdit.php';
                    }
                    ?>

                    <div class="col-md-3 my-3">
                        <a href="#" style="color: transparent;" data-bs-toggle="modal" data-bs-target="#modalAdd">
                            <div class="card add-curso">
                                <i class="fas fa-folder-plus"></i>
                                <h5 class="card-title fw-bold mb-0">ADICIONAR</h5>
                                <h2 class="card-title fw-bold">CURSO</h2>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <?php include './layout/_footer.php' ?>

    <?php
    if (!isset($_COOKIE['modalVisualized'])) {
        include './partials/_modal.php';
    }

    include './partials/_modalAdd.php';

    ?>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/scripts.js"></script>

</body>

</html>