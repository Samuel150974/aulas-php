<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes para arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Funções nativas para arrays</h1>
        <hr>
        <h2>implode()</h2>
        <p>Transforma array em uma string</p>
        <?php
        $arrayBandas = ["Pink Floyd", "Genesis", "Yes"];
        $textoBandas = implode(" - ", $arrayBandas);
        ?>

        <pre><?php var_dump($arrayBandas) ?> </pre>
        <pre><?php var_dump($textoBandas) ?></pre>

        <hr>

        <h2>extract ()</h2>
        <p>Extrai chaves associativas para variáveis.</p>

        <?php
        $nome = "beltrano";
        $aluno = ["id" => 1, "nome" => "Fulano", "idade" => 25];
        extract($aluno, EXTR_PREFIX_ALL, "chave");

        // Usamos o segundo parâmetro para definir um prefixo para os nomes
        // Isso evita conflito/sobreescrita de outras variáveis.
        ?>

        <ul>

            <li>ID: <?= $chave_id ?></li>
            <li>Nome: <?= $chave_nome ?></li>
            <li>Idade: <?= $chave_idade  ?></li>

        </ul>

        <p>Variável <code>$nome</code> original:<?= $nome ?></p>





























    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>