<?php
require __DIR__ . '/vendor/autoload.php';
ini_set('default_charset', 'UTF-8');

use \App\Entity\Torcedor;

$torcedor = new Torcedor;

$arquivo;
//Validação do POST de Envio de arquivo
if (isset($_POST['acao'])) {

    $arquivo = $_FILES['file'];
    $arquivoNovo = explode(".", $arquivo['name']);

    if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'xml') {
        header('location: lerXml.php?status=error1');
        exit;
    } else {
        move_uploaded_file($arquivo['tmp_name'], './App/File/uploads/' . $arquivo['name']);
        $xml = simplexml_load_file(__DIR__ . './App/File/uploads/' . $arquivo['name']);

        foreach ($xml->children() as $torcedores) {
           
            $torcedor->nome= $torcedores->attributes()->nome;
            $torcedor->documento= $torcedores->attributes()->documento;
            $torcedor->cep=  $torcedores->attributes()->cep;
            $torcedor->endereco= $torcedores->attributes()->endereco;
            $torcedor->bairro= $torcedores->attributes()->bairro;
            $torcedor->cidade = $torcedores->attributes()->cidade;
            $torcedor->uf = $torcedores->attributes()->uf;
            $torcedor->telefone = $torcedores->attributes()->telefone;
            $torcedor->email = $torcedores->attributes()->email;
            $torcedor->ativo = $torcedores->attributes()->ativo;

            $torcedor->cadastrar();

            $cont++;
        }
        
         header('location: lerXml.php?status=sucess');
    }
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/files.php';
include __DIR__ . '/includes/footer.php';
