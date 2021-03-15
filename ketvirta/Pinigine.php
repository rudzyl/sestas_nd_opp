<?php
// Patobulinti 1 uždavinio piniginę taip, 
// kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. 
// Parašyti metodą monetos, kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai
//  - popierinių pinigų skaičiavimui.
class Pinigine {

    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    static $popieriniuKiekis;
    static $metaliniuKiekis;

    public function ideti($kiekis): void{
        if($kiekis <= 2) {
            $this->popieriniaiPinigai += $kiekis;
            self::$popieriniuKiekis++;
        } else {
            $this->metaliniaiPinigai += $kiekis;
            self::$metaliniuKiekis++;
        }
    }
    public function skaiciuoti() {
        return  $this->popieriniaiPinigai + $this->metaliniaiPinigai;
    }
}