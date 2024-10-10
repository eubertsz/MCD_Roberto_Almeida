<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>BANCO MERCADO</title>
</head>

<body>
    <main>
        <h1>BANCO</h1><br>

        <form action="banco.php" method="post">
            <label for="produto">Insira o Produto</label>
            <input type="text" name="produto"><br><br>
            <label for="qntd">Insira a quantidade</label>
            <input type="text" name="qntd"><br><br>
            <label for="preco">Insira o Preço</label>
            <input type="text" name="preco"><br><br>
            <button type="submit">CADASTRAR</button>
        </form><br>

    </main>
<?php
require 'conexao.php';
$produto = $_POST['produto'] ?? null;
$qntd = $_POST['qtnd'] ?? null;
$preco = $_POST['preco'] ?? null;

if(isset($_POST['CADASTRAR'])){
    $produto = $_POST['produto'] ?? null;
    $qntd = $_POST['qntd'] ?? null;
    $preco = $_POST['preco'] ?? null;
}
?>
</body>

</html>