<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe geral</title>
    <style>
        .exemplo {
            border: solid 4px;
            padding: 4px;
            color: <?php echo "orange"; ?> 
        }
    </style>
</head>
<body>
    <h1 class="exemplo">Trabalhando com PHP</h1>
    <hr>

    <?php
    // Geração de texto/string
    echo "Estou estudando a linguagem PHP para Back-End\n";
    echo 'Este também é um texto/string';

    // Geração de tags/atributos HTML
    echo "<p>Este é um parágrafo gerado via PHP<p>";

    // Geração de tag com atributo
    echo'<p><abbr title="HyperText Preprocessor">PHP</abbr>
        é uma linguagem popular </p>';
    
    // 
    echo "<p><abbr title='HyperText Preprocessor'>PHP</abbr>
          é uma linguagem popular</p>";

    // Aspa dupla fora, aspa dupla com escape "\" dentro
    echo "<p><abbr title=\"HyperText Preprocessor\">PHP</abbr>
          é uma linguagem popular </p>";
    ?> 
    
    <script>
        const tituloH1 = document.querySelector('h1')
        tituloH1.addEventListener("click", function(){
            alert("<?php echo "Hello PHP e JavaScript!"; ?>");
        });
    </script>
</body>
</html>   