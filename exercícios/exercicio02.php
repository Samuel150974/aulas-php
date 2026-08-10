<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02: estruturas de dados com arrays e objetos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <style>
    .header,h2{
        
        align-items: center;
        text-align: center;
    }

    .article{ background-color: aqua;
              display: flex;
              gap: 20px;
              justify-content: space-between;


    }
   

  </style>
</head>

<body>
    <article class="header">
        <h1> Estrutura de dados</h1>
    
    
    



  
     
    <?php 
      $usuario = new stdClass;

    $usuario -> nome = "Samuel";
    $usuario -> email = "samuel@senac.com";
    $usuario -> senha = "123";
    $usuario -> idade = 25;
    $usuario -> sexo = "masculino";
    $usuario -> cidade = "são paulo";
    
    $usuario2 = [
        "nome" => "João",
        "email" => "joao@senac.com",
        "senha" => "123",
        "idade" => "28",
        "sexo" => "Masculino",
        "cidade" => "São paulo",
    ];
    ?>

      <section class="main">
      
   <!--    <h2>Analisando a estrutura</h2>
        <p>Usuário 1</p>
        <pre><?php var_dump($usuario) ?></pre>
        <hr>

        <p>usuário 2</p>
        <pre><?php var_dump($usuario2)?></pre>
        <hr>
 --><div class="container">
        <h2> Dados usuários</h2>
        <article>
        <ul>
            <li> Nome: <?= $usuario->nome ?> </li>
            <li> Email: <a href="mailto:<?= $usuario->email ?>"></a> 
                               <?= $usuario->email ?>      
        </li>
            <li> Senha: <?= $usuario->senha ?></li>
            <li>Idade: <?= $usuario->idade ?></li>
             <li>sexo: <?= $usuario->sexo?></li>
              <li>cidade: <?= $usuario->cidade ?></li>
        
            </ul>
        </article>
        <hr>
        
        <article>
        <ul>

            <li> Nome: <?= $usuario2["nome"]?></li>
            <li> Email: <?= $usuario2["email"] ?></li>
            <li> Senha: <?= $usuario2["senha"] ?></li>
            <li> Idade: <?= $usuario2["idade"] ?></li>
            <li> Sexo: <?= $usuario2["sexo"] ?></li>
            <li> Cidade: <?= $usuario2["cidade"] ?></li>
            
        </ul>
        </article>

      </div>


    </section>
    
    
    
    





 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>