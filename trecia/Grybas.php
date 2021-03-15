<?php
// Sukurti klasę Grybas. 
// Sukurti klasę Krepsys.
//  Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. 
//  Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos 
//  taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45.
// Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas 
// dėti į Krepsi objektą, kol bus pririnkta 500 svorio nesukirmijusių ir valgomų grybų.

class Grybas {

    private $valgomas;
    private $sukirmijes;
    private $gryboSvoris;

    public function __construct() {
        $this->valgomas = (bool) rand(0,1);
        $this->sukirmijes = (bool) rand(0,1);
        $this->gryboSvoris = rand(5,45);
    }
    public function getValgomas() {
        return $this->valgomas;
    }
    public function getSukirmijes() {
        return $this->sukirmijes;
    }
    public function getGryboSvoris() {
        return $this->gryboSvoris;
    }
    

}