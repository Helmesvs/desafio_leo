<?php

$uploadDir = "assets/uploads/";
$mineTypes = ["image/png", "image/jpeg"];

$titleError = null;
$descriptionError = null;
$imageError = null;

$id = null;
if (!empty($_POST['id'])) {
    $id = $_REQUEST['id'];
}

if (null == $id) {
    header("Location: index.php");
}

if (!empty($_POST)) {
    $validacao = true;

    // $title = $_POST['title'];
    // $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['title'])));


    if (!empty($_POST['title'])) {
        $title = $_POST['title'];
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['title'])));
    } else {
        $titleError = 'Por favor digite o título do curso!';
        $validacao = false;
    }

    if (!empty($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        $descriptionError = 'Por favor digite a descrição do curso!';
        $validacao = false;
    }

    $check = getimagesize($_FILES["image"]["tmp_name"]);

    if ($check !== false) {

        if (!empty($_FILES['image']) && $_FILES['image']['size'] < 2000001) {

            $ext = strtolower(substr($_FILES['image']['name'], -4));
            $new_name = date("Y.m.d-H.i.s") . $ext;

            move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $new_name);

            $image = $new_name;
        } else {
            if (!in_array($_FILES['image']['type'], $mineTypes)) {
                $imageError = "Enviei uma imagem no formato PNG ou JPGE.";
                $validacao = false;
            } elseif ($_FILES['image']['size'] > 2000000) {
                $imageError = 'Por favor selecione uma imagem de até 2MB.';
                $validacao = false;
            } else {
                $imageError = 'Por favor selecione uma imagem para o curso.';
                $validacao = false;
            }
        }
    } else {
        $pdo = DB::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM courses where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $image = $data['image'];
    }
}

if ($validacao) {
    $pdo = DB::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE courses set title = ?, description = ?, slug = ?, image = ? WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($title, $description, $slug, $image, $id));
    DB::desconectar();
    $mensage = 'Curso atualizado com sucesso';
    header("Location: index.php");
}
