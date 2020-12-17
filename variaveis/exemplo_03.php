<?php
  $nome = "Diego";
  $nomeCompleto = $nome . " Bezerra Martins";
  $idade = 31;
  $altura = 1.74;
  $cs = true;

  //array
  $frutas = array("abacaxi", "laranja", "morango");
  //echo $frutas[2];

  $nascimento = new DateTime();
  var_dump(($nascimento));
  /*
  object(DateTime)[1]
  public 'date' => string '2020-12-17 01:34:54.407511' (length=26)
  public 'timezone_type' => int 3
  public 'timezone' => string 'UTC' (length=3)
  */
  $arquivo = fopen("exemplo_03.php", "r"); //file open
  //var_dump($arquivo);
  //resource(3, stream)
  $null = NULL;
  $vazio = "";
  var_dump($null);
  //C:\wamp64\www\variaveis\exemplo_03.php:25:null
  var_dump($vazio);
  //C:\wamp64\www\variaveis\exemplo_03.php:26:string '' (length=0)
?>