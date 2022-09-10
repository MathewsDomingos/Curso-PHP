<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Aulas/php-aula05/aula05/_css/estilo.css">
  <title>Aula 07</title>
</head>
<body>
  <div>
      <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];

        echo "Os valores passados foram: $n1 , $n2 e $tipo";

        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "<br /> O valor de R é: $r <br /><br />";

        $a = 3;
        $b = "3";
        $re = ($a === $b) ? "SIM" : "NÂO";
        echo "As variaveis A e B são identicas? <strong>$re</strong>";
      ?>
      <pre>
          <code>$a = 3;</code>
          <code>$b = "3";</code>
          <code>$re = ($a == $b) ? "SIM" : "NÂO"; (SIM)</code>
          <code>$re = ($a === $b) ? "SIM" : "NÂO"; (NÂO)</code>
        </pre>
  </div>


  <pre>
      <code>Maior: $a > $b</code>
      <code>Menor: $a < $b</code>
      <code>Maior ou igual: $a >= $b</code>
      <code>Menor ou igual: $a >= $b</code>
      <code>Doferente: $a <> $b</code>
      <code>Doferente: $a != $b</code>
      <code>Igual: $a == $b</code>
      <code>Idêntico: $a === $b</code>
    </pre>
</body>
</html>