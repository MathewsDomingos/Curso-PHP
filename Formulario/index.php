<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">
  <title>Aula 08</title>
</head>
<body>
  <div>
      <form action="./idade.php" method="get">
        Nome: <input type="text" placeholder="Digite seu nome" name="nome" /><br />
        Ano de nasc: <input type="number" placeholder="Ano de nascimento" name="ano" /><br />
        <fieldset>
          <legend>Sexo</legend>
          <input type="radio" name="sexo" id="masc" value="Homem"/>
          <label for="masc">Masculino</label><br />

          <input type="radio" name="sexo" id="fem" value="Mulher"/>
          <label for="fem">Feminino</label><br />
        </fieldset><br />

        <input type="submit" value="Enviar" />
      </form>
  </div>

</body>
</html>