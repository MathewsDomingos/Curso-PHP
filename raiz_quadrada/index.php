<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">
  <title>Aula 07 - Tipos de operadores</title>
</head>
<body>
  <div>
      <form action="./idade.php" method="get">
        <h2>Calculando Raiz Quadrada</h2>
        valor: <input type="number" placeholder="Digite um valor" name="v" />
        <input type="submit" value="Calcular" />
      </form>
  </div>

  <div>
    <?php include("./valor.php");?>
  </div>

</body>
</html>