<?php
require 'conexao.php';

$prod = $_POST['produto'] ?? null;
$qntd = $_POST['qntd'] ?? null;
$preco = $_POST['preco'] ?? null;

if ($prod && $qntd && $preco) {
    $sql = $pdo->prepare("INSERT INTO tbmercado (produto, qntd, preco) VALUES (:produto, :qtnd, :preco)");
    $sql->bindValue(':produto', $produto);
    $sql->bindValue(':qntd', $qntd);
    $sql->bindValue(':preco', $preco);

    if ($sql->execute()) {
        header("Location: formulario.php");
    } else {
        echo "Error: " . $sql->errorInfo()[2];
    }
} else {
    echo "NULO";
}
?>
