<?php
  $anoNascimento = 1989;
  
  echo$anoNascimento , "<br/>";
  
  $nome = "Diego";
  
  //comentario
  echo"<h1>" . $nome . "</h1>";

  //exit; //para a execução do código
  
  //limpando variáveis
  unset($nome);

  if(!isset($nome)){ //isset: existe? (true ou false)
    //nomeCompleto não existe mais
    echo$nome;
  };

  $nome = "Diego";
  $sobrenome = "Bezerra";
  //concatenação por meio do ponto .
  $nomeCompleto = $nome . " " . $sobrenome;

  echo $nomeCompleto;
?>