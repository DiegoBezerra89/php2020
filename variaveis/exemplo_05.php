<?php
  $nome = "Diego";

  function teste() {
    global $nome;
    echo "teste 1 " . $nome;
    echo "<br/>";
  }
  teste();

  function teste2() {
    global $nome;
    echo "teste 2 " . $nome;
  }

  teste2();
?>