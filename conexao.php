<?php
//error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$hostname_localhost = "localhost";
$database_localhost = "qgsmoke";
$username_localhost = "root";
$password_localhost = "";

$localhost = mysql_pconnect($hostname_localhost, $username_localhost, $password_localhost) or trigger_error(mysql_error(),E_USER_ERROR); 


$host    = $hostname_localhost;
$banco   = $database_localhost; 
$usuario = $username_localhost; 
$senha   = $password_localhost; 
mysql_connect($host,$usuario,$senha);

?>