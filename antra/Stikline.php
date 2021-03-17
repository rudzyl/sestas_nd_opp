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
    private $kiekis = 0;
//be konstruktoriaus nebus priskirta turio
    public function __construct($turis) {

        $this->turis = $turis;

    }

    public function ipilti($litrai) {

        $visoKiekis = $litrai + $this->kiekis;
        $this->kiekis = min($this->turis, $visoKiekis);
        
    }
    public function ispilti() {
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
       
        return $kiekis;
        

    }


}