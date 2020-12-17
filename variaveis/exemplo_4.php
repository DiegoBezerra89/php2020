<?php
//arrays super globais
$number = $_GET["a"]; //recebe um parametro do navegador http://localhost/variaveis/exemplo_04.php?a=123
echo $number;

$ip = $_SERVER["REMOTE_ADDR"]; //recebe o ip do provedor de acesso do usuário
echo $ip;

$scriptName = $_SERVER["SCRIPT_NAME"]; //recebe o arquivo acessado pelo usuário
echo $scriptName;

//utilizando esses metodos é possivel gerar um logo de informações sobre o usuário
?>