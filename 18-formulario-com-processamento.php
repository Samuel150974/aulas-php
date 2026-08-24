<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Formulário com processamemto PHP</title>
</head>
<body>
    <div class="container">
        <h1>Formulário COM processamento PHP</h1>
        <hr>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"):
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(empty($nome) || empty ($email)):

?>
    <div class="alert alert-danger">
        <h2>Ops !</h2>
        <p>Você precisa preencher todos os campos!</p>
    </div>

    <?php
       endif;  // if de validação dos campos obrigatórios
    ?>

     <p class="alert alert-success"> Dados enviados com sucesso!</p>
   <?php
    else:
 ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
             <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>














    <?php endif; ?>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script> 
</html>