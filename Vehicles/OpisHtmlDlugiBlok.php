<?php

class OpisHtmlDlugiBlok extends Opis
{
    public function __construct($obiekt)
    {
        parent::__construct($obiekt);
        $this->setDaneOpisu();
    }

    public function setDaneOpisu()
    {
        $this->naglowek3=$this->obiekt->getNaglowek3();
        $this->zdjecie=$this->obiekt->getZdjecie();
    }

    public function generujOpis()
    {
       $s = "<div id='dlugi'>";
       $s.= parent::generujOpis();
       $s.= "<h3>".$this->naglowek3."</h3>";
       $s.= "<img src='".$this->zdjecie."'/>";
       $s.= "<div id='spis'>";
       $ps = $this->obiekt->getSzczegolowyOpis();
       $n = count($ps);
       for($i = 0; $i < $n; $i += 1)
       {
        $s.="<p>".$ps[$i]."</p>";
       }
       $s.="</div></div>";
       return $s;
    }
}

?>