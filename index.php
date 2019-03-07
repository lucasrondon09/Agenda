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
        <br/>
        <div class="row">
            <div class="col">
                <a href="cadastrar.php" class="btn btn-primary"><i class="fas fa-user-plus"></i> Cadastrar</a>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
            <form method="post" action="index.php#resultado">
                <div class="input-group mb-3">
                <input type="search" name="pesquisar" class="form-control" placeholder="Pesquisar um nome" aria-label="Pesquisar um nome" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                </div>
                </div>
            </form>
            </div>

        </div>
        <br/>
        <section id="resultado">
        <div class="row">
        <div class="col-md-12">
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $pesq = $_POST['pesquisar'];

            if(!empty($pesq)){
                $sqlPesq = " where nome like ('%".$pesq."%')";
            }else{
                $sqlPesq = "";
            }
            $sql = "select idcontatos as id, nome as nome, sobrenome as sobrenome, telefone as telefone, email as email from contatos".$sqlPesq;    
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
                    <tr>
                    <td>'.$id.'</td>
                    <td>'.$nome.'</td>
                    <td>'.$sobrenome.'</td>
                    <td>'.$telefone.'</td>
                    <td>'.$email.'</td>
                    <td><a href="visualizar.php?id='.$id.'"><i class="fas fa-eye"></i></a></td>
                    <td><a href="editar.php?id='.$id.'"><i class="fas fa-edit"></i></a></td>
                    <td><a href="excluir.php?id='.$id.'"><i class="fas fa-trash-alt"></i></a></td>

                    </tr>
                    ';
                }
            }else{
                echo $sql;

                var_dump($query);
            }
            
        
        ?>
        </tbody>
        </table>
        </div>
        </div>
        </section>
    </div> 
</body>
</html>