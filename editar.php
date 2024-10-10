<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Editar Usuario</title>
</head>
<body>
    <?php
        require 'conexao.php';
        $id_prod = $_REQUEST ["id"];
        $sql = $pdo->prepare ("SELECT * FROM tbmercado WHERE id_prod = :id_prod");
        $sql-> bindValue (":id_prod", $id_prod);
        $sql->execute();

        if($sql->rowCount()>0){
            $a = $sql->fetch(PDO::FETCH_ASSOC);
        }
        else{
            //header("Location:formulario.php");
            exit;
        }
    ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Editar Mercadoria</h2>
                    <form action="editando.php" method="post">
                        <input type="hidden" name="id_prod" id="id_prod" value="<?=$a['id_prod']; ?>">
                        <div class="form-group">
                            <label for="produto">Produto</label>
                            <input type="text" name="produto" value="<?=$a['produto']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="qntd">Quantidade</label>
                            <input type="text" name="qntd" value="<?=$a['qntd']; ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" name="preco" value="<?=$a['preco']; ?>" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>