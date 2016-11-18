<?php
require_once './vendor/autoload.php';
$krumo = new Krumo;
foreach (glob('encuestas/*.txt') as $f) {
    $respuestas = json_decode(file_get_contents($f));
    $name = basename($f,'.txt');
    echo "<b><u>$name</u></b>";
    Kint::dump($respuestas);
}

