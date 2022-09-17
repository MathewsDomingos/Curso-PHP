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
        $valor=$_GET["v"];
        //sqrt pega a raiz quadrada do valor
        $rq = sqrt($valor);
        echo "<h1>A raiz de $valor é igual a " . number_format($rq,2)."</h1>";
      ?>     
  </div>
</body>
</html>