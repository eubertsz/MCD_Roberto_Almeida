<?php
    require 'conexao.php';

    $lista = [];
    $sql = $pdo->query('SELECT * FROM tbmercado');
    $lista = [];
    if($sql->rowCount()>0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styletb.css">
    <title>Tabela</title>
</head>
<body>
    <h1> TABELA DE PRODUTOS</h1>
    <table border="1px">
    <tr>
        <th>ID</th>
        <th>PRODUTO</th>
        <th>QUANTIDADE</th>
        <th>PREÇO</th>
    </tr>
<?php foreach($lista as $a): ?>
        <tr>
            <td> <?php echo $a['id_prod']; ?> </td>
            <td> <?=$a['produto']; ?> </td>
            <td> <?php echo $a['qntd']; ?> </td>
            <td> <?php echo $a['preco']; ?> </td>
            <td> <a href="editar.php?id=<?=$a['id_prod'];?>">[EDITAR]</a>
            <td> <a href="excluir.php?id=<?=$a['id_prod'];?>">[EXCLUIR]</a></td>
        </tr>
        <?php endforeach; ?>
</table>

</body>
</html>