<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05: Funções </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <h2>Exibição de notas</h2>

    <?php



    $nota1 = 3;
    $nota2 = 2;
    $nota3 = 7;

    function calcularMedia($n1, $n2, $n3)
    {
        return ($n1 + $n2 + $n3) / 3; // retornar o valor da média
    }

    function verificarSituacao($m)
    {

        if ($m >= 7) { 
            return "aprovado";
        } else {
            return "reprovado";
        }
    }

    // chamar a função calcularMedia e passar pra elas as notas
    // guardar o resultado

    // chamar a função verificarSituacao e passar pra ela o resultado da média
    // guardar o resultado

    // mostrar o resultado da média
    // mostrar o resultado da situação

    ?> 

     <h3>Avaliando as notas</h3>

     <p>Resultado 1: <?= $nota1 ?></p>
     <p>Resultado 1: <?= $nota2 ?></p>
     <p>Resultado 1: <?= $nota3 ?></p>
     
     <?php  
     

     $media =  calcularMedia($nota1, $nota2, $nota3);
     
     $situacao= verificarSituacao($media);
     
     ?>
     
     <p> resultado: <?= $media ?></p>
     <p>situação: <?= $situacao ?></p>


     


     

     
     
     
     











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>