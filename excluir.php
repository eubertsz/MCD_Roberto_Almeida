<?php
    require 'conexao.php';
    $id_prod = $_REQUEST ["id"];

    $sql = $pdo->prepare ("DELETE FROM tbmercado WHERE id_prod = :id_prod");
    $sql-> bindValue (":id_prod", $id_prod);
    $sql->execute();

    header("Location: TABLE.php");
?>