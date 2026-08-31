<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Processamento exercicio-07</title>
</head>

<body>
    <div class="container">
        <h1>Recebendo dados</h1>
        <?php

        $erros = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = filter_input(INPUT_POST, 'nome');
        $fabricante = filter_input(INPUT_POST, 'fabricante');
        $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_INT);
        $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
        
        $fabricantesValidos = ["mobil","ipiranga","yamalube","motul"];
        
        $fabricantes = filter_input(
            INPUT_POST,
            'fabricantes',
            FILTER_SANITIZE_SPECIAL_CHARS,
            FILTER_REQUIRE_ARRAY
            ) ?? [];
            
            if (!is_array ($fabricantes)) {
                $fabricantes = [];
                $erros  [] = "Seleção inválida de fabricante";
            }
            
            $fabricantesValidos = array_intersect($fabricantes, $fabricantesValidos);
            
            if(empty($nome)) $erros [] = "O campo nome é obrigatório";
             if(empty($fabricante)) $erros [] = "Seleção de fabricante é obrigatória";
              if(empty($preco)) $erros [] = "Inclua o preço por favor";
               if(empty($quantidade)) $erros [] = "Informar quantidade é obrigatória";
            
               $filtroPreco = 
                [ "options" => [
                    "min_range" => 100,
                    "max_range" => 10000,
                ]];

               if(!filter_var($preco, FILTER_VALIDATE_INT,$filtroPreco)){
                $erros[] = "Valor inválido. O valor deve estar entre 100 e 10000";
               } 
            
               if (!empty($erros)):

      
            ?>

            
                <a href="exercicio07-formulario.html" class="btn btn-warning">Voltar para o formulário</a>
                <?php else: ?>
                <h2>Dados recebidos</h2>
                <p>Produto: <?= $nome ?></p>
                <p>Fabricante: <?= $fabricante ?></p>
                    <p>Preço: <?= $preco ?></p>
                    <p>Quantidade: <?= $quantidade ?></p>
                                                          
                     <?php if (!empty($fabricantes)): ?>
                        <p>Interesses: <?= implode(", ", $fabricantes) ?></p>
                    <?php endif; ?>
         


                <?php
                endif;
        } ?>
                 



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>