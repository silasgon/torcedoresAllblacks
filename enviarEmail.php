<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Torcedor;
use \PHPMailer\PHPMailer\PHPMailer;

//Create a new PHPMailer instance
$mail = new PHPMailer();
$torcedor = Torcedor::getEmailAtivo();

if (isset( $_POST['titulo'], $_POST['comunicado'])) {

    

    //Tell PHPMailer to use SMTP
    $mail->isSMTP(true);

    echo "<pre>"; print_r($_POST['titulo'], $_POST['comunicado']);echo "</pre>";exit;

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


    $titulo   = $_POST['titulo'];
    $texto    = $_POST['texto'];


    //destinatários
    foreach ($torcedor as $emails) {
        foreach ($emails as $email) {
            $addresses = is_array($email) ? $email : [$email];
            foreach ($addresses as $address) {
                $mail->addAddress($address);
            }
        }
    }

    //$mail->addAddress('talkallblacks@gmail.com', 'TEste de envio');

    $body = '<body>
<div class="bg-black">
  <div class="container">
    <img class="ax-center my-10 w-32" src="https://www.allblacks.com/assets/Uploads/Tabs__FocusFillWyIwLjAwIiwiMC4wMCIsNTEwLDI4MF0.png" />  <!-- Colocar imagem dos Allblacks -->
    <h1 class="ax-center text-white text-center mb-10">Everything' . $titulo . '</h1><p class="ax-center max-w-96 lh-lg text-white text-center text-2xl mb-10">
      ' .  $texto . '</p></div></div></body>';

    //conteudo do email
    $mail->isHTML(true);
    $mail->Subject = $titulo;
    $mail->Body = $body;


    $mail->AltBody = '';


    if (!$mail->send()) {
        header('location: comunicados.php?status=error');
    } else {
        header('Location: comunicados.php?status=success');
    }
}else{
    echo "Ta quebrado";
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/comunicados.php';
include __DIR__ . '/includes/footer.php';
