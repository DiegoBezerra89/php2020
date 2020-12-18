<?php

  $qualASuaIdade = 19;

  $idadeCrianca = 12;
  $idadeAdulto = 18;
  $idadeIdoso = 65;

  if($qualASuaIdade < 12) {
    echo "criança";
  } else if ($qualASuaIdade < 18) {
    echo "Adolescente";
  } else if ($qualASuaIdade < 65) {
    echo "Adulto";
  } else {
    echo "Idoso";
  }

  echo"<br>";

  $palavra = " é um adulto.";
  echo($qualASuaIdade > 18 ? "$palavra" : "não $palavra");
?>
