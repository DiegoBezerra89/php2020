<?php

//metodos de string
$nome = "Diego Bezerra";

$nome = strtoupper($nome); //to uppercase

echo "$nome <br>";

$nome = strtolower($nome); //to lowercase

echo "$nome <br>";

echo ucwords($nome) . "<br>"; //capitalize words

echo ucfirst($nome);
?>