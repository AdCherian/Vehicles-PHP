<?php

require_once("Pojazd.php");

class Samolot extends Pojazd
{
    private $iloscPasazerow = 0;
    private $ladownosc = 0;
    private $iloscSilnikow = 0;

    public function __construct($model, $rokRozpProd, $zdjecie, $opinia, $iloscPasazerow, $ladownosc, $iloscSilnikow)
    {
        parent::__construct($model, $rokRozpProd, $zdjecie, $opinia);
        $this->setIloscPasazerow($iloscPasazerow);
        $this->setLadownosc($ladownosc);
        $this->setIloscSilnikow($iloscSilnikow);
    }

    public function getSzczegolowyOpis():array
    {
        return array(
           "Ilość Pasazerów: ".$this->iloscPasazerow,
           "Ładowność: ".$this->ladownosc,
           "Ilość Silników: ".$this->iloscSilnikow
        );
    }

    public function getIloscPasazerow()
    {
        return $this->iloscPasazerow;
    }

    public function setIloscPasazerow($iloscPasazerow)
    {
        $this->iloscPasazerow=$iloscPasazerow;
    }
    

    public function getLadownosc()
    {
        return $this->ladownosc;
    }

    public function setLadownosc($ladownosc)
    {
        $this->ladownosc=$ladownosc;
    }
    

    public function getIloscSilnikow()
    {
        return $this->iloscSilnikow;
    }

    public function setIloscSilnikow($iloscSilnikow)
    {
        $this->iloscSilnikow=$iloscSilnikow;
    }
}
?>