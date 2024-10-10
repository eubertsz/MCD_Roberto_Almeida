<?php
    require 'conexao.php';
    $id_prod = $_POST['id_prod'];

    $sql = $pdo->prepare ("DELETE FROM tbmercado WHERE id_prod = :id_prod");
    $sql-> bindValue (":id_prod", $id_prod);
    $sql->execute();

    echo "Registro excluído com sucesso!";
    echo "<br><a href='TABLE.php'>Voltar para a tabela</a>";
?>