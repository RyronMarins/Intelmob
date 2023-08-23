<?php

session_start(); //initiate / open session 

//Importa a função que faz a conexão com o banco de dados.
require('db_connection.php');

//Carrega a classe User
include('classes/user.php');
$user = new User($db); 

//Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require('classes/class.phpmailer.php');

date_default_timezone_set('America/Sao_Paulo');

$SoftwarePersona = DIALOG_PERSONA;
$SiteAddress = SHORTSITEADDRESS;

?>