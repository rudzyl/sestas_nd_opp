<?php
// Sukurti klasę Stiklinė. 
// Sukurti privačią savybę tūris ir kiekis.
//  Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. 
//  Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. 
//  Parašyti metodą ispilti(), kuris grąžiną kiekį.
//   Sukurti tris stiklines objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę
//    stiklinę, o mažesnę į dar mažesnę.

class Stikline {

    private $turis;
    private $kiekis;
//be konstruktoriaus nebus priskirta turio
    public function __construct($turis) {

        $this->turis = $turis;

    }

    public function ipilti($litrai) {
        if($this-> turis < $litrai) {
            $this->kiekis = $this-> turis;
            echo 'netelpa';   
        } else {
            $this->kiekis += $litrai;
        }
        
    }
    public function ispilti() {

        $likutis = $this-> kiekis;
        $this->kiekis = 0;

        return $likutis;
        

    }


}