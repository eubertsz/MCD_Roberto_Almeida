<?php
require 'conexao.php';
$id_prod = $_POST['id_prod'];
$produto = $_POST['produto'];
$qntd = $_POST['qntd'] ;
$preco = $_POST['preco'];


$sql = $pdo->prepare("UPDATE tbmercado SET produto = :produto, qntd = :qntd preco = :preco, where id_prod = $id_prod");
$sql->bindvalue(':produto', $produto);
$sql->bindvalue(':qntd', $qntd);
$sql->bindvalue(':preco', $preco);

$sql->execute();

header("Location: formulario.php");
?>