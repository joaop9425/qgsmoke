<?php
//error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$hostname_localhost = ""; //Onde está localizado o Servidor
$database_localhost = ""; //Qual é o BD do projeto
$username_localhost = ""; //User do BD
$password_localhost = ""; //Passwd do BD

$localhost = mysql_pconnect($hostname_localhost, $username_localhost, $password_localhost) or trigger_error(mysql_error(),E_USER_ERROR); 


$host    = $hostname_localhost;
$banco   = $database_localhost; 
$usuario = $username_localhost; 
$senha   = $password_localhost; 
mysql_connect($host,$usuario,$senha);

?>
