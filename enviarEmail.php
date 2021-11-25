<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Torcedor; 
use \PHPMailer\PHPMailer\PHPMailer;

const USER = 'talkallblacks@gmail.com';
const PASSWORD = 'Allblacks21';
const SECURE = 'TLS';
const PORT = 587;
const CHARSET = 'UTF-8';

const FROM_EMAIL = 'talkallblacks@gmail.com';
const FROM_NAME = 'Allblacks';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP(true);

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = 587;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'talkallblacks@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'Allblacks21';

//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom('talkallblacks@gmail.com', 'Allblacks');


$torcedor = Torcedor::getEmailAtivo();

//$torcedor = Torcedor::getEmailInativo($_POST['email2']);

$titulo;
$comunicado;

//Validação post
if (isset($_POST['comunicado'], $_POST['titulo'], $_POST['comunicado'])) {

    $titulo         = $_POST['titulo'];
    $comunicado     = $_POST['comunicado'];
}

//$mail->addAddress('talkallblacks@gmail.com', 'TEste de envio');

//destinatários
$addresses = is_array($addresses) ? $addresses : [$addresses];
foreach ($torcedor as $t) { //Tentar salvar os email em um array
    echo "<pre>"; print_r($t);echo "</pre>";
}
//echo "<pre>"; print_r($torcedor);echo "</pre>";exit;
foreach ($addresses as $address) {
    $mail->addAddress($address);
}

$body = '<body>
<div class="bg-black">
  <div class="container">
    <img class="ax-center my-10 w-32" src="https://www.allblacks.com/assets/Uploads/Tabs__FocusFillWyIwLjAwIiwiMC4wMCIsNTEwLDI4MF0.png" />  <!-- Colocar imagem dos Allblacks -->
    <h1 class="ax-center text-white text-center mb-10">Everything' . $titulo . '</h1><p class="ax-center max-w-96 lh-lg text-white text-center text-2xl mb-10">
      ' .  $comunicado . '</p></div></div></body>';

//conteudo do email
$mail->isHTML(true);
$mail->Subject = $titulo;
$mail->Body = $body;


//$mail->msgHTML(__DIR__ . '\App\File\email\notices.html');


$mail->AltBody = '';



if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
