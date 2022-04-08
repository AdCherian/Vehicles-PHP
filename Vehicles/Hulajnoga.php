<?php

require_once("Pojazd.php");

class Hulajnoga extends Pojazd
{
    private $iloscKol = 0;
    private $iloscBlotnikow = 0;
    private $typ = "";

    public function __construct($model, $rokRozpProd, $zdjecie, $opinia, $iloscKol, $iloscBlotnikow, $typ)
    {
        parent::__construct($model, $rokRozpProd, $zdjecie, $opinia);
        $this->setIloscKol($iloscKol);
        $this->setIloscBlotnikow($iloscBlotnikow);
        $this->setTyp($typ);
    }

    public function getSzczegolowyOpis():array
    {
        return array(
            "Ilość Kół: ".$this->iloscKol,
            "Ilość Błotników: ".$this->iloscBlotnikow,
            "Typ: ".$this->typ
        );
    }

    public function getIloscKol()
    {
        return $this->iloscKol;
    }

    public function setIloscKol($iloscKol)
    {
        $this->iloscKol=$iloscKol;
    }

    public function getIloscBlotnikow()
    {
        return $this->iloscBlotnikow;
    }

    public function setIloscBlotnikow($iloscBlotnikow)
    {
        $this->iloscBlotnikow=$iloscBlotnikow;
    }

    public function getTyp()
    {
        return $this->typ;
    }

    public function setTyp($typ)
    {
        $this->typ=$typ;
    }
}

?>