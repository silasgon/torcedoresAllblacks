<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Torcedor;

$torcedores = Torcedor::getTorcedores();

//echo "<pre>"; print_r($torcedores);echo "</pre>";exit;

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';