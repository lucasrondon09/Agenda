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
            <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
        </ol>
        </nav>
        <div class="row">
        <div class="col-md-12">                    
            <form method="post" action="cadastrar_action.php">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" >
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Sobrenome</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" >
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Telefone</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="telefone" name="telefone" >
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" >
                </div>
            </div>
            <div class="float-right">
            <a href="index.php" class="btn btn-primary"> Voltar</a>
            <input type="submit" class="btn btn-success" value="Salvar">
            </div>
            </form>
        </div>
        </div>
    </div> 
</body>
</html>