<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
    	parent::__construct();
    
    	$this->_db = $db;
    }

	public function get_user_hash($email){	

		try {
			$stmt = $this->_db->prepare('SELECT password FROM users WHERE email = :email AND active="Yes" ');
			$stmt->execute(array('email' => $email));
			
			$row = $stmt->fetch();
			$password = $row['password'];

			echo '<p class="bg-danger">'.$password.'</p>';

			return $password;

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}
	
	//Função construída por Fernando e Muriel para recuperar dados do usuário	
	public function get_user_data($email){	

		try {
			$stmt = $this->_db->prepare('SELECT * FROM users WHERE email = :email');
			$stmt->execute(array('email' => $email));
			
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			foreach ($rows as $row) {
			return $row;
			}


		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}


	public function logRegistration($logTypeID,$agentID) {
	  //set timezone
	  date_default_timezone_set('America/Sao_Paulo');

	  $ip = $_SERVER['REMOTE_ADDR']; // Save the visitor's IP

	  $time = date('Y-m-d H:i:s'); // Save the current date and time (MySQL format)

	  try {

	    // Use a prepared statement to insert the log data into the database
	    $stmt = $this->_db->prepare("INSERT INTO logs (time, ip, logTypeID, agentID) VALUES (:time, :ip, :logTypeID, :agentID)");
	    $stmt->bindParam(":time", $time);
	    $stmt->bindParam(":ip", $ip);
	    $stmt->bindParam(":logTypeID", $logTypeID);
	    $stmt->bindParam(":agentID", $agentID);
	    $stmt->execute();
	  } catch (PDOException $e) {
	    // Handle the error
	    error_log("Error saving log: " . $e->getMessage());
	  }
	}



	public function login($email,$password){

		$hashed = $this->get_user_hash($email);



		$userdata_array = $this->get_user_data($email);
		
		if($this->password_verify($password,$hashed) == True){
		    
		    $_SESSION['loggedin_intelmob'] = true;

		    $log = $this->logRegistration(1,$userdata_array['userID']); // $logTypeID = 1 //Last Login
			
		    return true;
		}
		else{
			return $hashed;
		} 	
	}
		
	public function logout(){
		//session_destroy();
		unset($_SESSION['loggedin_intelmob']);
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin_intelmob']) && $_SESSION['loggedin_intelmob'] == true){
			return true;
		}		
	}
}


?>