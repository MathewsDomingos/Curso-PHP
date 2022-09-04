<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Aulas/php-aula05/aula05/_css/estilo.css">
  <title>Aula 05</title>
  <style>
    h2{
      font: 20pt Arial;
      Color: #171559;
      font-weght: bold;
    }
  </style>
</head>
<body>
  <div>
      <?php
        $br = "<br/>";
        $n1 = $_GET["x"];
        $n2 = $_GET["y"];

        echo "<h2>Valores Recebidos $n1 e $n2 </h2>";
        echo "O valor absoluto de $n2 é " . abs($n2);
        echo $br."O valor de $n1 <sup>$n2</sup> é " . pow($n1,$n2);
        echo $br."A raiz de $n1 é " . sqrt($n1);
        echo $br."O valor de $n2 arredondado é " . round($n2); 
        echo $br."O valor inteiro de $n2 é " . intval($n2); 
        echo $br."O valor de $n2 em moeda é " . number_format($n2,2,",","."); 
        //ceil Arredonda pra baixo
        //floor Arredonda pra cima
        echo $br,$br;

        echo "abs() = Valor absoluto".$br;
        echo "pow() = Potenciação (ao cubo)".$br;
        echo "sqrt() = Raiz quadrada".$br;
        echo "round() = Arredondar".$br;
        echo "intval() = Parte inteira da variavél".$br;
        echo "number_format() = Formatar".$br;
        
      ?>
  </div>
</body>
</html>