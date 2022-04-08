<?php

require_once("InterfejsOpis.php");

class Opis implements InterfejsOpis
{
    protected $naglowek2="";
    protected $naglowek3="";
    protected $zdjecie="";
    protected $tabak=[]; // Tablica akapitów.
    protected $obiekt=null;

    public function __construct($obiekt)
    {
        $this->obiekt=$obiekt;
        $this->setDaneOpisu();
    }

    public function getDaneOpis()
    {
        return $this->naglowek2;
    }

    public function setDaneOpisu()
    {
        $this->naglowek2=$this->obiekt->getNaglowek2();
    }

    public function generujOpis()
    {
        return "<h2>Model: ".$this->obiekt->getNaglowek2()."</h2>";
    }
}
?>