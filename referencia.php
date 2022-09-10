<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Aulas/php-aula05/aula05/_css/estilo.css">
  <title>Aula 06</title>
</head>
<body>
  <div>
      <?php
        $a = 3;
        $b = &$a;
        $b += 5;

        echo "O valor de A é: $a";
        echo "<br /> O valor de B é: $b";

        echo "<br /><br />";
        echo "& = REFERÊNCIA as mesma alterações de valores ocorem na 
        <strong> A e B </strong>";
        echo "<br /><br />";

        echo "<strong>Variaveis de Variaveis</strong><br />";?>

        <pre>
          <code>$site = "CursosOnline";</code>
          <code>$$site = "Curso de PHP";</code>
        </pre>

        <?php 
        $site = "CursosOnline";
        $$site = "Curso de PHP";

        echo "$site";
        echo "<br />$CursosOnline";



      ?>
  </div>
</body>
</html>