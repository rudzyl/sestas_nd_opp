<?php

include __DIR__ .'/Stikline.php';

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);
echo '<pre>';
$stikline1->ipilti(150);
var_dump($stikline1);
$stikline2->ipilti($stikline1->ispilti());
var_dump($stikline2);
$stikline3->ipilti($stikline2->ispilti());
var_dump($stikline3);
