<?php 
include("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
        <h1>Agenda</h1>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Contatos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
        </nav>
        <div class="row">
        <div class="col-md-12">
    
        <?php
            $pesqId     = $_POST['id'];
            $nome       = $_POST['nome'];
            $sobrenome  = $_POST['sobrenome'];
            $telefone   = $_POST['telefone'];
            $email      = $_POST['email'];

            $sql = "select idcontatos as id, nome as nome, sobrenome as sobrenome, telefone as telefone, email as email from contatos where idcontatos = ".$pesqId;    
            $query = mysqli_query($con, $sql);
            $query_rows = mysqli_num_rows($query);
            if($query_rows > 0){
                $sqlUp = 'UPDATE contatos SET nome= "'.$nome.'", sobrenome ="'.$sobrenome.'", telefone= "'.$telefone.'", email = "'.$email.'" WHERE idcontatos ='.$pesqId;
                $queryUp = mysqli_query($con, $sqlUp);
                if($queryUp){
                    $msg = "Registro alterado com sucesso!";
                    $alert = "alert-success";
                }else{
                    $msg = "Não foi possível alterar o registro, verifique!";
                    $alert = "alert-danger";
                }
            }else{
                $msg = "Registro não localizado!";
                $alert = "alert-danger";
            }

        ?>


        <div class="alert <?php echo $alert;?>" role="alert">
            <?php echo $msg;?>
        </div>

        <div class="float-right">
        <a href="index.php" class="btn btn-primary"> Voltar</a>
        </div>
        </div>
        </div>
    </div> 
</body>
</html>