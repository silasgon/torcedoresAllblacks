<?php
require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Torcedor');

use \App\Entity\Torcedor; 

//Validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    echo "<pre>";echo "VAlidando ID";print_r($_GET['id']);echo "</pre>";exit;
    header('location: index.php?status=error');
    exit;
}

$torcedor = Torcedor::getTorcedor($_GET['id']);

//echo "<pre>";echo "VAlidando @@@@@";print_r($torcedor);echo "</pre>";exit;

//validar torcedor
if (!$torcedor instanceof Torcedor) {
    echo "<pre>";echo "Verificando a instancia";print_r($torcedor);echo "</pre>";exit;
    header('location: index.php?status=error');
    exit;
}

//echo "<pre>";echo "antes de validando o POST";print_r($torcedor);echo "</pre>";exit;

//Validação post
if (isset($_POST['nome'], $_POST['documento'], $_POST['email'], $_POST['telefone'], $_POST['cep'], $_POST['endereco'], $_POST['cidade'], $_POST['uf'], $_POST['ativo'] )) {

    
    $torcedor->nome         = $_POST['nome'];
    $torcedor->documento    = $_POST['documento'];
    $torcedor->email        = $_POST['email'];
    $torcedor->telefone     = $_POST['telefone'];
    $torcedor->cep          = $_POST['cep'];
    $torcedor->endereco     = $_POST['endereco'];
    $torcedor->cidade       = $_POST['cidade'];
    $torcedor->uf           = $_POST['uf'];
    $torcedor->ativo        = $_POST['ativo'];
    echo "<pre>";echo "no IF de Validação de validando o POST";print_r($torcedor);echo "</pre>";exit;
    
    $torcedor->atualizar();

    header('Location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';