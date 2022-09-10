<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Aulas/php-aula05/aula05/_css/estilo.css">
  <title>Aula 07 - Exercicio MEDIA</title>
</head>
<body>
  <div>
      <?php
        $ano = $_GET["an"];
        $idade = 2022 - $ano;
        echo "Quem nasceu em $ano tem $idade anos <br />";
        $r = ($idade >= 18 && $idade <= 65) ? "É OBRIGATÓRIO" : "NÃO É OBRIGATÓRIO";
        echo "O eleitor $r a votar";

      ?>
  </div>
</body>
</html>