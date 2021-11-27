<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Communication\Email;
use \App\Entity\Torcedor;

//Validação do ID
if (!isset($_GET['id']) or !is_numeric($_GET['id']) ) {
  echo "<pre>"; print_r($_GET['id']);echo "</pre>";exit;
  header('location: index.php?status=error');
  exit;
}

$torcedor = Torcedor::getTorcedor($_GET['id']);



//validar torcedor
if (!$torcedor instanceof Torcedor) {
  echo "<pre>"; print_r($torcedor);echo "</pre>";exit;
  header('location: index.php?status=error');
  exit;
}


//Validação post
if (isset($_POST['titulo'], $_POST['texto'])) {

  $servico      = new Email;
  $addresses;
  $subject      = $_POST['titulo'];
  $body         = '<body>
                    <div class="bg-black">
                      <div class="container">
                        <img class="ax-center my-10 w-32" src="https://www.allblacks.com/assets/Uploads/Tabs__FocusFillWyIwLjAwIiwiMC4wMCIsNTEwLDI4MF0.png" />  <!-- Colocar imagem dos Allblacks -->
                        <h1 class="ax-center text-white text-center mb-10">' . $_POST['titulo'] . '</h1><p class="ax-center max-w-96 lh-lg text-white text-center text-2xl mb-10">
                          ' .  $_POST['texto'] . '</p></div></div></body>';
  $addresses    = $torcedor->email;

  $sucesso = $servico->sendMail($addresses, $subject, $body);

  header('Location: index.php?status=success');
  exit;
}else{
  header('Location: index.php?status=error');
  exit;
}
echo "<pre>";echo 'Saindo dooooo'; print_r($_POST['emailUnico']);echo "</pre>";exit;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/comunicados.php';
include __DIR__ . '/includes/footer.php';
