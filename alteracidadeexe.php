<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nomecidade = $_POST['nomecidade'];
    $estado = $_POST['estado'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>alterção de cidade</h1>

    <?php
                echo "<p>ID: $id</p>";
                echo "<p>NOME: $nomecidade</p>";
                echo "<p>ESTADO: $estado</p>";
                $sql = "UPDATE cidade SET
                nomecidade = '$nomecidade',
                estado = '$estado'
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "dados atualizados!";
        else
        echo "erro ao atualizar dados!\n".mysqli_error($con);
    
    ?>
</body>
</html>