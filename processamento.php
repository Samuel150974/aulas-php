<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>

</head>

<body>
    <div class="container">
        <h1>Recebimento e processamento dos dados</h1>
        <hr>
        <?php             //GET exibe informações no link de buscas
  
//Capturando os dados de cada campo
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $mensagem = $_POST["mensagem"];
          /* operador ?? -> Caso nenhum interesse seja selecionado, a variável guardará um array vazio*/
        $interesses = $_POST["interesses"]?? []; //array
        
        //Caso nenhuma opção seja selecionada, o valor "nao" fica como padrão
        $informativos = $_POST["informativos"];
        ?>

         <h2>Dados recebidos</h2>
         <p>Nome: <?= $nome ?></p>
         <p>Email: <?= $email ?></p>
         <p>Idade: <?= $idade ?></p>
         <p>Mensagem: <?= $mensagem ?></p>
         <?php if(!empty($interesses)):   ?>
         <p>Interesses: <?= implode(", ", $interesses) ?></p>
         <?php endif; ?>

         
         <p>Informativos: <?= $informativos ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>