<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('includes/conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $ativo = $_POST['ativo'];
    $cidade = $_POST['cidade'];
    echo "<h1>dados do cliente</h1>";
    echo "nome: $nome <br>";  
    echo "email: $email <br>";  
    echo "senha: $senha <br>"; 
    echo "ativo: $ativo <br>";
    echo "cidade: $cidade <br>";
    
    $sql = "INSERT INTO cliente (nome, email, senha, ativo, id_cidade)";
    $sql.= "VALUES('".$nome."', '".$email."', '".$senha."', '".$ativo."', '".$cidade."')";
 

    $result = mysqli_query($con, $sql);
    if($result){
        echo"<h2>dados cadastrados com sucesso!</h2>";
    }
    else{
        echo"<h2>erro ao cadastrar</h2>";
        echo mysqli_error($con);
    }
    
    ?>
</body>
</html>