<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Communication\Email;
use \App\Entity\Torcedor;


//Validação post
if (isset($_POST['ativosTorcedores'], $_POST['titulo'], $_POST['texto']) || isset($_POST['inativosTorcedores'], $_POST['titulo'], $_POST['texto'])) {

    $torcedor;

    if (isset($_POST['ativosTorcedores']) && isset($_POST['inativosTorcedores'])) {
        $torcedor = Torcedor::getAllEmails();
    } else if (isset($_POST['ativosTorcedores'])) {
        $torcedor = Torcedor::getEmailTAtivo();
    } else {
        $torcedor = Torcedor::getEmailTInativo();
    }

    $servico      = new Email;
    $addresses;
    $subject      = $_POST['titulo'];
    $body = '<body>
              <div class="bg-black">
                <div class="container">
                  <img class="ax-center my-10 w-32" src="https://www.allblacks.com/assets/Uploads/Tabs__FocusFillWyIwLjAwIiwiMC4wMCIsNTEwLDI4MF0.png" />  
                  <!-- Colocar imagem dos Allblacks --><h1 class="ax-center text-white text-center mb-10">' . $_POST['titulo'] .
        '</h1><p class="ax-center max-w-96 lh-lg text-white text-center text-2xl mb-10">
                    ' .  $_POST['texto'] . '</p></div></div></body>';

    foreach ($torcedor as $emails) {
        foreach ($emails as $email) {
            $addresses = is_array($email) ? $email : [$email];
 
            $sucesso = $servico->sendMail($addresses, $subject, $body);

            $sucesso ? header("Location: index.php?status=success") : header("Location: index.php?status=error");
        }
    }

/*     header('Location: index.php?status=success');*/
    exit; 
}


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/comunicados.php';
include __DIR__ . '/includes/footer.php';
