<?php
require 'conexao.php';

$produto = $_POST['produto'] ?? null;
$qntd = $_POST['qntd'] ?? null;
$preco = $_POST['preco'] ?? null;

try {
    $sql = $pdo->prepare("INSERT INTO tbmercado (produto, qntd, preco) VALUES (:produto, :qtnd, :preco)");
    $sql->bindValue(':produto', $produto);
    $sql->bindValue(':qntd', $qntd);
    $sql->bindValue(':preco', $preco);
    $sql->execute();
}
catch (PDOException $e) {
    
    switch ($e->getCode()) {
        case 23000: 
            echo "Esse e-mail já está cadastrado.";
            break;
        case 42000: 
            echo "Erro no banco de dados. Por favor, tente novamente mais tarde.";
            break; 
        case 22007: 
            echo "Formato de dados inválido. Por favor, verifique os campos e tente novamente.";
            break;
        default: 
            echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>
