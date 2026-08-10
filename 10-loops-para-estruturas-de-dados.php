<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop para estruturas</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Loops para estruturas de dados</h1>
        <hr>
 <?php
 $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"];
?>

    <h2>Usando o loop for para acessar o array</h2>
    <ol>
        <?php for($i = 0; $i < count($meses); $i++):?>
        <li><?= $meses[$i] ?></li>
        <?php endfor; ?>

    </ol>

    <hr>

    <h2>Usando o loop for para acessar uma matriz (array de arrays)</h2>
    <?php
    $planosDeEstudos = [
    ["JS Avançado","Node.js","Next.js"],
    ["PHP","Orientação a Objetos"],
    ["Teoria das Cores", "Photoshop com IA","UX/UI"]
    
    ];    
    
    $linhas = count ($planosDeEstudos);
    for($i = 0; $i <$linhas; $i++):// Acessa cada linha
        $colunas = count($planosDeEstudos[$i]);
        for($j = 0; $j < $colunas; $j++): //Acessa cada coluna
       ?>
       <?php
            endfor; // fim do acesso a cada linha
             endfor; //fim do acesso a cada coluna
            ?>
            
            <hr>

            <h2>Usando o loop foreach para arrays</h2>
            <?php
            $alunos = ["Thiago","Renan","Adela","Pérola"];
            foreach($alunos as $aluno):
                ?>
                <p><?= $aluno ?></p>
                <?php
                endforeach;
                ?>

                <hr>

                <h2>Usando foreach para array associativo</h2>
                <?php
                $curso = [
                "Título" => " Gastronomia" ,
                "Carga horaria" =>  200,
                "Descricao" => " Aprender o básico sobre a área"
                ];
                foreach($curso as $chave => $valor):
                    ?>
                    <p><b><?= $chave ?></b>:<?= $valor ?></p>
                    <?php
                    endforeach;

                    // Extraindo somente o valor
                    foreach($curso as $valor):
                    ?>
                        <p><i><?= $valor ?></i></p>
                        <?php
                        endforeach;
                        ?>

                        <hr>
                        <h2>Usando foreach em uma matriz</h2>

                        <?php
                         foreach($planosDeEstudos as $categoria): // cada linha // cada linha (categoria)
                              foreach($categoria as $assunto): // cada coluna (assuntp/curso)
                        ?>
                        <p><?= $assunto  ?></p>

                        <?php
                        endforeach;
                    endforeach;
                    ?>

                    <hr>
                    <h2>Usando foreach em uma matriz associativa</h2>
                    <?php
                    $clientes = [
                    [
                      "nome" => "Juliene",
                      "email"=> "ju@senac.br"
                     
                    ],
                    [
                    "nome" => "Luiz",

                    "email" => "luiz@senac.br"]
                    
                    ];

                    foreach($clientes as $cliente):
                    ?>

                    

                    <p> <b>Nome:</b> <span class="bg-primary-subtle p-1"> <?= $cliente["nome"] ?> </span> </p>
                    <p> <b>E-mail:</b> <span class="bg-dark-subtle p-1"> <?= $cliente["email"] ?> </span> </p>
                    
                    <?php endforeach ?>
</div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script> 
</body>
</html>