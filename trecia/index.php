<?php
include __DIR__ .'/Grybas.php';
include __DIR__ .'/Krepsys.php';

$grybas1 = new Grybas;

echo '<pre>';
var_dump($grybas1);

$krepsys = new Krepsys;

    while($krepsys->svoris <= 500) {

        $grybas1 = new Grybas();
        var_dump($grybas1);

        if($grybas1->getValgomas() == true && $grybas1->sukirmijes == false) {
            $krepsys->prideti($grybas1->getGryboSvoris());
        }
        $krepsys->visiGrybai++;
    }



var_dump($grybas1);
var_dump($krepsys);