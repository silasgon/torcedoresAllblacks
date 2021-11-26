<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Communication\Email;
use \App\Entity\Torcedor;

//Validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

$torcedor = Torcedor::getEmailTInativo();

//validar torcedor
if (!$torcedor instanceof Torcedor) {
  echo "<pre>";echo "Validação do Torcedor EDITAR Email"; print_r($_GET['id']);echo "</pre>";exit;
  header('location: index.php?status=error');
  exit;
}

//Validação post
if (isset($_POST['nome'], $_POST['documento'], $_POST['email'], $_POST['telefone'], $_POST['cep'], $_POST['endereco'], $_POST['cidade'], $_POST['uf'], $_POST['ativo'] )) {

  
  $torcedor->email        = $_POST['email'];


  header('Location: index.php?status=success');
  exit;
}


echo "<pre>"; print_r($torcedor);echo "</pre>";exit;
$servico = new Email;
$subject = 'Acertando email';
$sucesso;
$body = '<body>
<div class="bg-black">
  <div class="container">
    <img class="ax-center my-10 w-32" src="https://www.allblacks.com/assets/Uploads/Tabs__FocusFillWyIwLjAwIiwiMC4wMCIsNTEwLDI4MF0.png" />  <!-- Colocar imagem dos Allblacks -->
    <h1 class="ax-center text-white text-center mb-10">Everything' . $titulo . '</h1><p class="ax-center max-w-96 lh-lg text-white text-center text-2xl mb-10">
      ' .  $texto . '</p></div></div></body>';

foreach ($torcedor as $emails) {
    foreach ($emails as $email) {
        $addresses = is_array($email) ? $email : [$email];
        $sucesso = $servico->sendMail($addresses, $subject, $body);
        echo $sucesso ? 'Messagem enviada com sucesso!' : $servico->getError();
    }
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/comunicados.php';
include __DIR__.'/includes/footer.php';