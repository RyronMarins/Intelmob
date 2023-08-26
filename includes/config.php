<?php session_start(); //initiate / open session 

//Importa a função que faz a conexão com o banco de dados.
require('db_connection.php');

//Carrega a classe User
include('classes/user.php');
$user = new User($db);

//Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require('classes/class.phpmailer.php');

//Importa as funçõe básicas do sistema.
require_once('functions/inc_functions.php');

date_default_timezone_set('America/Sao_Paulo');

//A sessão cpf possibilita a obtenção dos dados do usuário por meio da função get_user_data
$email = $_SESSION['email'];

//Obtém os dados do usuário
$userdata_array = $user->get_user_data($email);

//Atribuição de valores à variáveis necessárias
$userID = $userdata_array['userID'];
$memberNome = $userdata_array['name'];

//Criação da sessão userID que será a chave para as consultas do sistema
$_SESSION['userID'] = $userID;

if($userdata_array['photo']){
    
    $UserPhoto = $userdata_array['photo'];

}else{

    $UserPhoto = 'user-blank.jpg';
}

$SoftwarePersona = DIALOG_PERSONA;
$SiteAddress = SHORTSITEADDRESS;


//Em resumo: defini qual meu locale e o diretório que os arquivos vão ficar, carreguei a biblioteca e inicializei o domínio de texto. Com isso, as funções do php-gettext já podem ser usadas, e toda vez que forem usadas, vão procurar os arquivos nos lugares corretos.

// Report all errors except E_NOTICE
// This is the default value set in php.ini
// Para mais opões ver https://www.php.net/manual/pt_BR/function.error-reporting.php
error_reporting(E_ALL ^ E_NOTICE);