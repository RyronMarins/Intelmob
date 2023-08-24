<?php require('includes/config-login.php');

//======================================================================
// Variáveis recebidas
//======================================================================

$email = trim($_POST['email']);
$password = $_POST['password'];


//======================================================================
// Validação do reCAPTCHA
//======================================================================

// Query database for email and password. If both inputs matched in the database, we log user in.
if($user->login($email,$password)){

    // Cria a sessão email para persistir os dados do usuário no Dashboard
    $_SESSION['email'] = $email;

    header('Location: index.php');
    exit;

}else{

    $msg_title = "Invalid credentials!";
    $msg_body = " Please check credentials and try again.";
    $msg_type = "warning";


    $_SESSION["mensagem"]= '<script>

                                jQuery(document).ready(function(){

                                    Swal.fire({ title: "'.$msg_title.'", text: "'.$msg_body.'", icon: "'.$msg_type.'", customClass: {confirmButton: "btn btn-primary"}});                               

                                });

                            </script>
                            ';


    //redirection 
    header('Location:auth-login.php');
    exit;   

}