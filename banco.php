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
    // Capturando erros específicos
    switch ($e->getCode()) {
        case 23000: // Duplicidade de entrada
            echo "Esse e-mail já está cadastrado.";
            break;
        case 42000: // Erro de sintaxe SQL
            echo "Erro no banco de dados. Por favor, tente novamente mais tarde.";
            break; // Erro de conexão
            //case 08004:
            //echo "Não foi possível conectar ao banco de dados. Por favor, verifique a conexão.";
            //break;
        case 22007: // Formato de dados inválido
            echo "Formato de dados inválido. Por favor, verifique os campos e tente novamente.";
            break;
        default: // Mensagem genérica para outros erros
            echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>
