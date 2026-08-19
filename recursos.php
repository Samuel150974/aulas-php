<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos php</title>
</head>
<body>
     <?php //recursos.php

const ALUNO = "Tiago";
 define("ESCOLA", "Senac Penha");
    $curso = "Técnico em Informática para Internet";
    $tecnologias = ["PHP", "SQL", "HTML","CSS","JavaScript"];
    function verificarIdade(int $idade):string { return $idade >= 18? "maior" : "menor";} 

    ?>
</body>
</html>