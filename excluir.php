<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Torcedor; 

//Validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

$torcedor = Torcedor::getTorcedor($_GET['id']);

//validar torcedor
if (!$torcedor instanceof Torcedor) {
    header('location: index.php?status=error');
    exit;
}

//echo "<pre>"; print_r($torcedor);echo "</pre>";exit;

//Validação post
if (isset($_POST['excluir'] )) {

   
    $torcedor->excluir();

    header('Location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmarExclusao.php';
include __DIR__.'/includes/footer.php';