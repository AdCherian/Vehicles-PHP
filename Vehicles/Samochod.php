<?php

require_once("Pojazd.php");

class Samochod extends Pojazd
{
    private $opony = ""; //letnie, zimowe
    private $iloscDrzwi = 0;
    private $moc = 0;

    public function __construct($model, $rokRozpProd, $zdjecie, $opinia, $opony, $iloscDrzwi, $moc)
    {
        parent::__construct($model, $rokRozpProd, $zdjecie, $opinia);
        $this->setOpony($opony);
        $this->setIloscDrzwi($iloscDrzwi);
        $this->setMoc($moc);
    }

    public function getSzczegolowyOpis():array
    {
        return array(
            "Opony: ".$this->opony,
            "Ilość Drzwi:".$this->iloscDrzwi,
            "Moc: ".$this->moc
        );
    }

    public function getOpony()
    {
        return $this->opony;
    }

    public function setOpony($opony)
    {
        $this->opony=$opony;
    }

    public function getIloscDrzwi()
    {
        return $this->iloscDrzwi;
    }

    public function setIloscDrzwi($iloscDrzwi)
    {
        $this->iloscDrzwi=$iloscDrzwi;
    }
    
    public function getMoc()
    {
        return $this->moc;
    }

    public function setMoc($moc)
    {
        $this->moc=$moc;
    }
    // -----------------------------------]
}


?>