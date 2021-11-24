<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Torcedor;

$torcedor = new Torcedor;

$arquivo;
//Validação do POST de Envio de arquivo
if (isset($_POST['acao'])) {

    $arquivo = $_FILES['file'];
    $arquivoNovo = explode(".", $arquivo['name']);

    if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'xml') {
        //header('location: index.php?status=error');
        die("Você não pode fazer upload deste tipo de arquivo");
    } else {
        move_uploaded_file($arquivo['tmp_name'], './App/File/uploads/' . $arquivo['name']);
        $xml = simplexml_load_file(__DIR__ . './App/File/uploads/' . $arquivo['name']);

        $cont=0;
        for ($i=0; $i < count($xml); $i++) { 
            $torcedor->nome         = $xml->torcedor[2]->attributes()->nome;
            $torcedor->documento    = $xml->torcedor[2]->attributes()->documento;
            $torcedor->cep          = $xml->torcedor[2]->attributes()->cep;
            $torcedor->endereco     = $xml->torcedor[2]->attributes()->endereco;
            $torcedor->bairro       = $xml->torcedor[2]->attributes()->bairro;
            $torcedor->cidade       = $xml->torcedor[2]->attributes()->cidade;
            $torcedor->uf           = $xml->torcedor[2]->attributes()->uf;
            $torcedor->telefone     = $xml->torcedor[2]->attributes()->telefone;
            $torcedor->email        = $xml->torcedor[2]->attributes()->email;
            $torcedor->ativo        = $xml->torcedor[2]->attributes()->ativo;

            $cont++;
            echo $torcedor;
        }

        echo $cont;

        foreach ($xml->torcedor->attributes() as $torcedor => $torc) {
            echo "<pre>";
            echo "$torcedor = $torc";
            echo "</pre>";

        }
  

        // header('location: index.php?status=sucess');
    }
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/files.php';
include __DIR__ . '/includes/footer.php';
