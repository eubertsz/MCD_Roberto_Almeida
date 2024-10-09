<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <?php
        require 'conexao.php';
        $id_prod = $_REQUEST ["id_prod"];
        $lista = [];
        $sql = $pdo->prepare ("SELECT * FROM tbmercado WHERE id_prod = :id_prod");
        $sql-> bindValue (":id_prod", $id_prod);
        $sql->execute();

        if($sql->rowCount()>0){
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            //header("Location:formulario.php");
            exit;
        }
    ?>

<form action="editando.php" method="post">
        <input type="hidden" name="id_prod" id="id_prod" value="<?=$lista['id_prod']; ?>">
        <label for="produto">
            produto <input type="text" name="produto" value="<?=$lista['produto']; ?>">
        </label>
            qntd <input type="text" name="qntd" value="<?$lsita['qntd']; ?>">
        </label>
            preco <input type="text" name="preco" value="<?$lsita['preco']; ?>">
        </label>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>