<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Aulas/php-aula05/aula05/_css/estilo.css">
  <title>Aula 05</title>
</head>
<body>
  <div>
      <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        $m = ($n1+$n2) / 2;
        $br = "<br/>";

        echo "<h2>Valores Recebidos: ". $n1 . " e " . $n2 . "</h2>";
        // URL/?a=5&b=20
        
        echo "A soma é: " . ($n1 + $n2);
        echo $br. "A subtraçõa é: " . ($n1 - $n2);
        echo $br. "A multiplicação é: " . ($n1 * $n2);
        echo $br. "A divisão é: " . ($n1 / $n2);
        echo $br. "A média é: " . $m;
      ?>
  </div>
</body>
</html>