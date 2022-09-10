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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $m = ($n1+$n2) / 2;
        echo "A media entre as notas $n1 e $n2 é $m <br />";
        //$sit = ($m>=6) ? "<strong> APROVADO </strong>" : "<strong> REPROVADO </strong>";
        echo "A situação do aluno é:".($sit=($m>=6)?"<strong>APROVADO</strong>":"<strong>REPROVADO</strong>");
      ?>
  </div>
</body>
</html>