<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisando funções para trabalhar datas e horários em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        h1,
        h2,
        p {
            text-align: center;
        }
    </style>

</head>
</head>

<body>

    <h1>Funções para trabalhar datas e horários em php</h1>


    <h2>Função time ()</h2>
    <p>A função "Time ()" Retorna o nosso horário atual com medição dos números em segundos desde a época unix(1 de janeiro de 1970 00:00:00 GMT),</p>
    <p>a época unix foi o marco zero do sistema de calendário usado por sistema unix, hoje em dia é o ponto de referência usado para medir o tempo do sistema operacional unix e outros sistemas computacionais.</p>
    <p>Exemplo:

        <?php
        echo 'Agora: ' . time();
        ?>


    </p>

    <hr>

    <h2>Função getdate ()</h2>
    <p>A função "getdate" é usada para recuperar informações de data/horário, retornando um array associativo com informação da data do timestamp,</p>
    <p>ou horário local se o timestamp for null(valor especial indicativo de ausência de informação ou valor desconhecido) ou omitido.</p>
    <p>Exemplo:

        <?php
        $today = getdate();
        print_r($today);
        ?>

    </p>

    <hr>

    <h2> Função mktime() </h2>
    <p>A função "mktime" é usada para retornar o carimbo de data do unix para uma data, </p>
    <p>essa função é identica ao gmmktime, diferenciado por os paramêtros passados representar uma data e não uma data gmt</p>
    <p> Exemplo:

        <?php

        // 3 de outubro de 1975 caiu em uma sexta-feira
        echo "3 outubro de, 1975 caiu em " . date("l", mktime(0, 0, 0, 10, 3, 1975)) . "<br><br>";

        //A função mktime() é útil para fazer cálculos e validações de datas.
        //Ela calcula automaticamente o valor correto para entradas fora do intervalo:
        echo date("M-d-Y", mktime(0, 0, 0, 12, 36, 2001)) . "<br>";
        echo date("M-d-Y", mktime(0, 0, 0, 14, 1, 2001)) . "<br>";
        echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 2001)) . "<br>";
        echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 99)) . "<br>";
        ?>
    </p>

    <hr>

    <h2> Função checkdate() </h2>
    <p>A função "checkdate()" verifica a validade da data formada por argumentos, a data é considerada válida se cada paramêtro for adequadamente definido. </p>

    <p> exemplo: 

    <?php
       
var_dump(checkdate(12, 31, 2000));
var_dump(checkdate(2, 29, 2001));
     
     ?>

    </p>

    <hr>
    
     <h2>Exemplo prático </h2>

    <p>
       <?php
         
       ?>

    </p>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>