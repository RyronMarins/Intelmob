<?php require('includes/config-login.php');

//======================================================================
// Checa se o e-mail já existe no sistema
//======================================================================
function authRegisterVerifyEmailDuplicity($db,$email)
{

    // use a prepared statement that can get info desired
    $statement = $db->prepare(" SELECT * FROM users WHERE email = :email");

    // get the result resource from the database
    $data = $statement->execute(array(':email' => $email));

    // fetch result as an associative array
    $data = $statement->fetch(PDO::FETCH_ASSOC);

    // and return it to the caller.
    return $data;    

}

//======================================================================
// Checa se o e-mail já existe no sistema
//======================================================================
function findUserByEmail($db,$email)
{

    // use a prepared statement that can get info desired
    $statement = $db->prepare(" SELECT * FROM users WHERE email = :email");

    // get the result resource from the database
    $data = $statement->execute(array(':email' => $email));

    // fetch result as an associative array
    $data = $statement->fetch(PDO::FETCH_ASSOC);

    // and return it to the caller.
    return $data;    

}

//======================================================================
// Cria o usuário
//======================================================================
function authRegisterNewUser($db,$name,$email,$password,$localeID)
{

    try{
        $sql = "INSERT INTO users (name,email,password,passwordLastUpdate,localeID) VALUES (?,?,?,current_timestamp(),?)";

        $stm = $db->prepare($sql);   
        $stm->bindValue(1, $name);   
        $stm->bindValue(2, $email);
        $stm->bindValue(3, $password);
        $stm->bindValue(4, $localeID);
        $stm->execute();  

        $id = $db->lastInsertId('userID');

    }catch(PDOException $e){

        $e = true;  
    }

    if (!($e)) {

        return $id;

    }

}

//======================================================================
// Atualiza o Activation Token
//======================================================================
  
function setAccountActivationToken($db,$activation_code,$userID)
{

    try{
        $sql = "UPDATE users SET activationToken=? WHERE userID=?";
        $stm = $db->prepare($sql);
        $stm->bindValue(1, $activation_code);
        $stm->bindValue(2, $userID);
        $stm->execute();

    }catch(PDOException $e){

        $e = true;
    }

    if (!($e)) {return true;}

}

//======================================================================
// Atualiza o Activation Token
//======================================================================
  
function setAccountActivationExpiry($db,$userID)
{

    $expiry = 1 * 24  * 60 * 60; //By default, the expiration time is one day ( 1 * 24 * 60 * 60).

    $activationExpiry = date('Y-m-d H:i:s',  time() + $expiry);    

    try{
        $sql = "UPDATE users SET activationExpiry=? WHERE userID=?";
        $stm = $db->prepare($sql);
        $stm->bindValue(1, $activationExpiry);
        $stm->bindValue(2, $userID);
        $stm->execute();

    }catch(PDOException $e){

        $e = true;
    }

    if (!($e)) {return true;}

}

//======================================================================
// Por padrão, o campo 'active' está definido como 'Yes' quando o usuário
// é criado. Para não ter que alterar esse padrão no banco, usamos essa
// função para desativar a conta até que o usuário a ative através do link
// de ativação
//======================================================================
  
function deactivateAccount($db,$userID)
{

    try{
        $sql = "UPDATE users SET active = 'No' WHERE userID=?";
        $stm = $db->prepare($sql);
        $stm->bindValue(1, $userID);
        $stm->execute();

    }catch(PDOException $e){

        $e = true;
    }

    if (!($e)) {return true;}

}


//======================================================================
// Gera o Activation Code
//======================================================================

function generate_activation_code()
{
    //$activation_code = bin2hex(random_bytes(16));

    //return $activation_code;
}


function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}


//////////////////////////////////////////
//// WelcomeMail
//////////////////////////////////////////

function WelcomeMail($emailDestinatario,$nomeDestinatario,$interfaceLocale){

    try{ 

        //Inicia a classe PHPMailer
        $mail = new PHPMailer();        

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML

        $mail->isSMTP(); // Send using SMTP
        $mail->Host       = SITEHOST; // Set the SMTP server to send through
        $mail->SMTPAuth   = true; // Enable SMTP authentication
        $mail->Username   = SITEEMAIL; // SMTP username
        $mail->Password   = SITEPASS; // SMTP password
        $mail->SMTPSecure = "tls"; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Define o remetente
            $mail->From = SITEEMAIL;
            $mail->FromName = DIALOG_PERSONA;

            //Define os destinatário(s)
            $mail->AddAddress($emailDestinatario,$nomeDestinatario);            

                $assunto = "Bem-vindo ao IntelMob!";

                $conteudo = '

                <style>html,body { padding: 0; margin:0; }</style>
                <div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
                    <tbody>
                      <tr>
                        <td align="center" valign="center" style="text-align:center; padding: 40px">
                          <a href="https://www.ileel.ufu.br/togatherup" rel="noopener" target="_blank">
                            <img alt="ToGatherUp Logo" src="https://www.ileel.ufu.br/togatherup/app/assets/media/logos/email-logo-togatherup.png" height="50" />
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td align="left" valign="center">
                          <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                            <!--begin:Email content-->
                            <div style="padding-bottom: 30px; font-size: 17px;">
                              <strong>Olá, '.$nomeDestinatario.',</strong>
                            </div>
                            <div style="padding-bottom: 30px">Agradecemos pelo seu registro no ToGatherUp! Estamos animados em ter você conosco e mal podemos esperar para ajudá-lo a construir seus projetos. Então, vamos ToGatherUp!</div>
                            
                            <div style="padding-bottom: 30px">Para começar, por favor siga o link abaixo para fazer login na sua nova conta:</div>

                            <div style="padding-bottom: 40px; text-align:left;">
                              <a href="https://www.ileel.ufu.br/togatherup/app/auth-login.php" rel="noopener" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank">Entrar no ToGatherUp</a>
                            </div>

                            <div style="padding-bottom: 30px">Para ajudar você a começar, preparamos o guia "Como criar um projeto no ToGatherUp: um guia passo a passo para pesquisadores". Acesse-o por meio do link <a href="https://www.ileel.ufu.br/togatherup/support-center/tutorials.php" rel="noopener" target="_blank">Como criar um projeto no ToGatherUp: um guia passo a passo para pesquisadores</a>.</div>                            

                            <div style="padding-bottom: 30px">Se você tiver alguma dúvida ou precisar de ajuda, não hesite em entrar em contato com nossa equipe de suporte respondendo a este e-mail ou visitando nosso Centro de Suporte.</div>


                            <div style="padding-bottom: 30px">Obrigado novamente por escolher o ToGatherUp. Estamos ansiosos para trabalhar com você!</div>

                            <!--end:Email content-->
                            <div style="padding-bottom: 10px">Atenciosamente,
                            <br>Equipe de Desenvolvimento do ToGatherUp.
                            <tr>
                              <td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                                <p>Se você não fez essa solicitação, nenhuma outra ação é necessária.</p>
                                <p>Copyright ©
                                <a href="https://www.ileel.ufu.br/togatherup" rel="noopener" target="_blank">ToGatherUp</a>.</p>
                              </td>
                            </tr></br></div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                ';

       

        // Content
        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $conteudo;

        $mail->send();

    }catch (Exception $e){
        //Setamos a variável $e caso exista erro
        $e = true;  
    }

    if (!($e)) {return true;}  
}

//////////////////////////////////////////
//// Construção do e-mail
//////////////////////////////////////////



//////////////////////////////////////////
//// Account activation
//////////////////////////////////////////

function ActivationAccountMail($emailDestinatario,$nomeDestinatario,$activation_code,$interfaceLocale){

    // create the activation link
    $activation_link = SITEADDRESS . "auth-activation.php?email=$emailDestinatario&activation_code=$activation_code";    

    try{ 

        //Inicia a classe PHPMailer
        $mail = new PHPMailer();        

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->IsHTML(true); // Define que o e-mail será enviado como HTML

        $mail->isSMTP(); // Send using SMTP
        $mail->Host       = SITEHOST; // Set the SMTP server to send through
        $mail->SMTPAuth   = true; // Enable SMTP authentication
        $mail->Username   = SITEEMAIL; // SMTP username
        $mail->Password   = SITEPASS; // SMTP password
        $mail->SMTPSecure = "tls"; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Define o remetente
        $mail->From = SITEEMAIL;
        $mail->FromName = DIALOG_PERSONA;        

        //Define os destinatário(s)
        $mail->AddAddress($emailDestinatario,$nomeDestinatario);


            $assunto = "Ativação da conta do toGatherUp";

            $conteudo  = '

            <style>html,body { padding: 0; margin:0; }</style>
            <div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
              <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
                <tbody>
                  <tr>
                    <td align="center" valign="center" style="text-align:center; padding: 40px">
                      <a href="https://www.ileel.ufu.br/togatherup" rel="noopener" target="_blank">
                        <img alt="ToGatherUp Logo" src="https://www.ileel.ufu.br/togatherup/app/assets/media/logos/email-logo-togatherup.png" height="50" />
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" valign="center">
                      <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                        <!--begin:Email content-->
                        <div style="padding-bottom: 30px; font-size: 17px;">
                            <strong>Boas-vindas ao ToGatherUp!</strong>
                        </div>
                        <div style="padding-bottom: 30px">Para ativar sua conta, clique no botão abaixo para verificar seu endereço de e-mail. Uma vez ativada, você terá acesso completo ao ToGatherUp.</div>
                        <div style="padding-bottom: 40px; text-align:center;">
                            <a href="'.$activation_link.'" rel="noopener" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank">Ativar Conta</a>
                        </div>
                        
                        <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                        <div style="padding-bottom: 50px; word-wrap: break-all;">
                            <p style="margin-bottom: 10px;">O botão não está funcionando? Tente colar esta URL em seu navegador:</p>
                            <a href="'.$activation_link.'" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7">'.$activation_link.'</a>
                        </div>
                        <!--end:Email content-->
                        <div style="padding-bottom: 10px">Atenciosamente,
                        <br>Equipe de Desenvolvimento do ToGatherUp.
                        <tr>
                          <td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
                            <p>Se você não fez essa solicitação, nenhuma outra ação é necessária.</p>
                            <p>Copyright ©
                            <a href="https://www.ileel.ufu.br/togatherup" rel="noopener" target="_blank">ToGatherUp</a>.</p>
                          </td>
                        </tr></br></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            ';


        // Content
        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $conteudo;

        $mail->send();

    }catch (Exception $e){
        //Setamos a variável $e caso exista erro
        $e = true;  
    }

    if (!($e)) {return true;}  
}


//////////////////////////////////////////
//// Account activation
//////////////////////////////////////////

//======================================================================
// Váriáveis do formulário
//======================================================================

$name = trim($_POST['username']);
$email = trim($_POST['email']);
$email = strtolower($email);
$password = $_POST['password'];
$localeID = 1;
$interfaceLocale = $localeID;

//Verifica se o email já foi utilizado
$User = authRegisterVerifyEmailDuplicity($db,$email);

if($User){

    $msg_title = "Nós lamentamos!";
    $msg_body = "Não foi possível concluir seu registro no momento. Tente novamente mais tarde ou entre em contato com o suporte se o problema persistir.  (Ref:486)";
    $msg_type = "warning";

    $_SESSION["mensagem"]= '<script>

                                jQuery(document).ready(function(){

                                    Swal.fire({ title: "'.$msg_title.'", text: "'.$msg_body.'", icon: "'.$msg_type.'",
                                        customClass: { confirmButton: "btn btn-primary" }, buttonsStyling: false });

                                });

                            </script>
                            ';


    //redirection 
    header('Location:auth-register.php');
    exit;

}else{


/////////////////////////////////////////////
//// Início do fluxo de registro do usuário
/////////////////////////////////////////////

//hash the password
$hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

$id = authRegisterNewUser($db,$name,$email,$hashedpassword,$localeID);

    if($id){



        //$activation_code = generate_activation_code();
        $activation_code = getToken(16);

        // Desativamos a conta para que ela possa ser ativada através do link de ativação
        deactivateAccount($db,$id);

        // Registra o activationToken no banco
        setAccountActivationToken($db,$activation_code,$id);

        // Registra o activationExpiry
        setAccountActivationExpiry($db,$id);

        // send the activation email
        ActivationAccountMail($email,$name,$activation_code,$interfaceLocale);

        // send the welcome email
        WelcomeMail($email,$name,$interfaceLocale);

        //logout
        $user->logout();                

        $msg_title = "Conta criada!";
        $msg_body = "Enviamos um e-mail para que você possa ativar sua conta. Acesse seu e-mail e ative sua conta para continuar.";
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


    }else{

        //logout
        $user->logout();  

        $msg_title = "Nós lamentamos!";
        $msg_body = "Não foi possível concluir seu registro no momento. Tente novamente mais tarde ou entre em contato com o suporte se o problema persistir. (Ref:614)";
        $msg_type = "warning";


        $_SESSION["mensagem"]= '<script>

                                    jQuery(document).ready(function(){

                                        Swal.fire({ title: "'.$msg_title.'", text: "'.$msg_body.'", icon: "'.$msg_type.'", customClass: {confirmButton: "btn btn-primary"}});                                

                                    });

                                </script>
                                ';

        //redirection 
        header('Location:auth-register.php');
        exit;     
    }

/////////////////////////////////////////////
//// Fim do fluxo de registro do usuário
/////////////////////////////////////////////   

}