<?php

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
*/

//database credentials
define('DBHOST','localhost');
define('DBUSER','usr_dev_3');
define('DBPASS','rHBmUibpQ8E42HV');
define('DBNAME','dev_imob');

try {

	//CONEXAO PDO PARA versões DO PHP ACIMA 5.3.6
	//create PDO connection 
	$db = new PDO("mysql:host=".DBHOST.";port=3306;charset=utf8;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	//CONEXAO PDO PARA versões DO PHP abaixo 5.3.6
	//create PDO connection 
	//$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'); 
	//$db = new PDO("mysql:host=".DBHOST.";port=3306;charset=utf8;dbname=".DBNAME, DBUSER, DBPASS,$opcoes);
	//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {
	  //show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

/*
| -------------------------------------------------------------------
| GLOBALS
| -------------------------------------------------------------------
*/

try {

	$stmt = $db->prepare('SELECT * FROM config');
														
			$stmt->execute();
			$data = $stmt->fetchAll();

	foreach ($data as $row){	
		define($row["chave"],$row["valor"]);
	}

}catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}
?>