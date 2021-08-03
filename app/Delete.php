<?php
$id = 0;

if (!empty($_POST['id'])) {
    $id = $_REQUEST['id'];
}

if (!empty($_POST)) {
    $id = $_POST['id'];

    //Delete do banco:
    $pdo = DB::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM courses where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    DB::desconectar();
    header("Location: index.php");
}
