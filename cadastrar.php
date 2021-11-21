<?php
require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Cadastrar Torcedor');

use \App\Entity\Torcedor; 

if (isset($_POST['nome'], $_POST['documento'], $_POST['email'], $_POST['telefone'], $_POST['cep'], $_POST['endereco'], $_POST['cidade'], $_POST['uf'], $_POST['ativo'] )) {

    $torcedor = new Torcedor;

    $torcedor->nome         = $_POST['nome'];
    $torcedor->documento    = $_POST['documento'];
    $torcedor->email        = $_POST['email'];
    $torcedor->telefone     = $_POST['telefone'];
    $torcedor->cep          = $_POST['cep'];
    $torcedor->endereco     = $_POST['endereco'];
    $torcedor->cidade       = $_POST['cidade'];
    $torcedor->uf           = $_POST['uf'];
    $torcedor->ativo        = $_POST['ativo'];

        
    $torcedor->cadastrar();

    header('Location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';