<?php

class Krepsys {

    public $svoris;
    public $visiGrybai;
    public $sveikas;

    public function prideti($gryboSvoris) {
        $this->sveikas++;
        $this->svoris += $gryboSvoris;
    }
    

}