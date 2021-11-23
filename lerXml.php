<?php

use \App\Entity\Torcedor;

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

        $tt;
        $countTorcedores = 0;
        foreach ($xml->children() as $torcedores) {
            $countTorcedores++;

            echo "<pre>";
            echo "Verificando arquivo xml";
            print_r($torcedores);
            //var_dump($torcedores);
            echo $countTorcedores;
            echo "</pre>";
            //exit;
        }
        exit;

        // header('location: index.php?status=sucess');
    }
}
/* 

function lerArquivoXml($arquivo)
{

    $xml = simplexml_load_file(__DIR__ . './uploads/' . $arquivo['name']);
    echo "<pre>";
    echo "Verificando arquivo xml";
    print_r($xml);
    echo "</pre>";
    exit;
}
 */



include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/files.php';
include __DIR__ . '/includes/footer.php';
