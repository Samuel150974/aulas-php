<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais e uso do PHP intercalado com HTML</title>
    <style>
        h1{ background-color: wheat;}
        body{text-align: center;}
       
         ul{text-align: center;
         list-style-type: none;
         padding: 4px;
         margin: auto;
         width: 50%;
         border: solid 1px;}
         .crianca{background-color: royalblue;}
         .adulto{background-color: wheat;}
         .melhor-idade{background-color: pink;}  
        
       

    </style>
</head>
<body>
    <h1>===== Ingressos show shaulin do sertão =====</h1>
    <hr>
   
    <?php 
    $idade = 65;
    $categoria = "";
    $valor = "";

    if($idade <= 12){
       $categoria = "Criança";
       $valor = 25.00;
       $estilo = "crianca";
    } elseif ($idade <=60){
      $categoria ="Adulto";
      $valor = 40.00;
      $estilo = "adulto";

      }else{
      $categoria= "Melhor idade";
      $valor = 20.00; 
      $estilo = "melhor-idade";
      }
      ?>

      <hr>

       <ul class="<?= $estilo ?>">
        <li>Idade pessoa: <?= $idade ?> </li>
        <li>A categoria do ingresso: <?= $categoria ?> </li>
        <li>O valor do  ingresso: R$ <?= number_format($valor, 2, "," ,".") ?> </li>
    </ul>

    <hr>




</body>
</html>