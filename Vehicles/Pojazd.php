<?php

require_once("PojazdAbstrakcyjny.php");

abstract class Pojazd extends PojazdAbstrakcyjny
{
    private $model = "";
    private $rokRozpProd = 0;
    private $zdjecie = "images/";
    private $opinia = "";
 
    public function __construct($model, $rokRozpProd, $zdjecie,  $opinia)
    {
        $this->setModel($model);
        $this->setRokRozpProd($rokRozpProd);
        $this->setZdjecie($zdjecie);
        $this->setOpinia($opinia);
    } 

    public function getNaglowek2()
    {
        return $this->model;
    }

    public function getNaglowek3()
    {
        return "Produkowany od ".$this->rokRozpProd." roku";
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model=$model;
    }
 
    public function getRokRozpProd()
    {
        return $this->rokRozpProd;
    }

    public function setRokRozpProd($rokRozpProd)
    {
        $this->rokRozpProd=$rokRozpProd;
    }
    
    public function getZdjecie()
    {
        return $this->zdjecie;
    }

    public function setZdjecie($zdjecie)
    {
        $this->zdjecie=$zdjecie;
    }
  
    public function getOpinia()
    {
        return $this->opinia;
    }

    public function setOpinia($opinia)
    {
        $this->opinia=$opinia;
    }
}
?>