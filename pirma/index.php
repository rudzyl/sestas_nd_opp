<?php
include __DIR__ .'/Pinigine.php';

$pinigine = new Pinigine;
$pinigine->ideti(3);
$pinigine->ideti(1);

echo '<pre>';
var_dump($pinigine);
echo $pinigine->skaiciuoti();
?>