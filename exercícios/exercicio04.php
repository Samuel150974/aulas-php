<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>estruturas de repetição (loops) e estruturas de dados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Estruturas de repetição (loops) e estruturas de dados</h1>

    <?php
    $linguagens = [
      [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
      ],

      [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
      ],

      [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "Comportamentos"
      ],

      [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
      ],

      [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação de dados"
      ]
    ];

    ?>



      <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th>id</th> <!-- tr É usada para criar linhas dentro de uma tabela HTML. -->
            <th>nome</th> <!-- //th É usada dentro de uma tabela (<table>) para definir células de cabeçalho. -->
            <th>descrição</th>
          </tr>
        </thead>
      
      <tbody>
        <?php foreach ($linguagens as $linguagem): ?>

          <tr>
            <td><?= $linguagem['id'] ?></td>
            <td><?= $linguagem['nome'] ?></td>
            <td><?= $linguagem['descricao'] ?></td>
          </tr>
        <?php endforeach ?>

        </tbody>

      </table>




















  </div>


































  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>