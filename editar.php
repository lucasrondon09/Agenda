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
            $pesqId = $_GET['id'];
            $sql = "select idcontatos as id, nome as nome, sobrenome as sobrenome, telefone as telefone, email as email from contatos where idcontatos = ".$pesqId;    
            $query = mysqli_query($con, $sql);
            $query_rows = mysqli_num_rows($query);
            if($query_rows > 0){
                while($dados = mysqli_fetch_array($query)){
                    $id         = $dados['id'];
                    $nome       = $dados['nome'];
                    $sobrenome  = $dados['sobrenome'];
                    $telefone   = $dados['telefone'];
                    $email      = $dados['email'];

                    echo '
                    <form method="post" action="editar_action.php">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="id" name="id" value="'.$id.'">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" name="nome" value="'.$nome.'">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Sobrenome</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="'.$sobrenome.'">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Telefone</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="telefone" name="telefone" value="'.$telefone.'">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="'.$email.'">
                        </div>
                    </div>
                    <div class="float-right">
                    <a href="index.php" class="btn btn-primary"> Voltar</a>
                    <input type="submit" class="btn btn-success" value="Salvar">
                    </div>
                    </form>        
                    ';
                }
            }else{

                echo '<div class="alert alert-danger" role="alert">
                Registro não localizado, verifique!
              </div>';
            }

        ?>
        </div>
        </div>
    </div> 
</body>
</html>