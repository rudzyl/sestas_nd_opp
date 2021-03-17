<?php
// Sukurti klasę Grybas. 
// Sukurti klasę Krepsys.
//  Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. 
//  Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos 
//  taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45.
// Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas 
// dėti į Krepsi objektą, kol bus pririnkta 500 svorio nesukirmijusių ir valgomų grybų.

namespace Miskas\Mazas;

class Grybas {

    private $valgomas, $sukirmijes, $svoris;
     

    public function __construct() {
        $this->valgomas = (bool) rand(0,1);
        $this->sukirmijes = (bool) rand(0,1);
        $this->svoris = rand(5,45);
    }
    public function __get($savybe) {
        return $this->$savybe;
    }
   
}