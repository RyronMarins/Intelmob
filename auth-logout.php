<?php require('includes/config.php');

//logout
$user->logout(); 


    $msg_title = "Agradecemos por usar o ".$SoftwarePersona.".";
    $msg_body = "";
    $msg_type = "success";


    $_SESSION["mensagem"]= '<script>

                                jQuery(document).ready(function(){

                                    Swal.fire({ title: "'.$msg_title.'", text: "'.$msg_body.'", icon: "'.$msg_type.'", customClass: {confirmButton: "btn btn-primary"}});                               

                                });

                            </script>
                            ';


    //redirection 
    header('Location:auth-login.php');
    exit;  

?>