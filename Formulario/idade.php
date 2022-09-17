


<?php
  $nome = isset($_GET["nome"]) ? $_GET["nome"] : ["Nome não informado"];
  $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
  $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : ["Sexo não informado"];
  $idade = date("Y") - $ano;

  echo "$nome é $sexo e tem $idade anos de idade";
?>