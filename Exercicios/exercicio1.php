<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Aulas/php-aula05/aula05/_css/estilo.css">
  <title>Aula 06 - Exercicios</title>
</head>
<body>
  <div>
      <?php
        $preco = $_GET["p"];
        echo "O preço do produto é: ".number_format($preco,2)."<br/>";
        $preco += $preco * 10 / 100;
        echo "Valor com 10% de aumento: ".number_format($preco,2)."<br/>";
        $preco = $preco - ($preco * 10 / 100);
        echo "Valor com 10% de desconto: ".number_format($preco,2)."<br/>";
      ?>
  </div>
</body>
</html>