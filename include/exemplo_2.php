<?php
  //include "inc/exemplo_1.php"; //inclui o codigo, possui diversos métodos
  //require "inc/exemplo_1.php"; //requisita o arquivo e determina q ele tem q estar em pleno funcionamento.
  require_once "inc/exemplo_1.php"; //requisita apenas uma vez, se houver outro require ele desconsidera, assim como no caso do include
  
  echo somar(3, 4);


?>