<?php
namespace Miskas\Didelis;
use Miskas\Mazas\Grybas;


class Krepsys {

    public $yra = 0;
    const TALPA = 500;

    public function prideti(Grybas $grybas) : bool {
        if($grybas->valgomas && !$grybas->sukirmijes) {
            $this->yra = $this->yra + $grybas->svoris;
        }
        return self::TALPA >= $this->yra;
    }
    

}