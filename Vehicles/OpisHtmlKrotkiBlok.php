<?php

    require_once("Opis.php");

    class OpisHtmlKrotkiBlok extends Opis
    {
        public function __construct($obiekt)
        {
            parent::__construct($obiekt);
            $this->setDaneOpisu();
        }

        public function setDaneOpisu()
        {
            $this->naglowek3=$this->obiekt->getNaglowek3();
        }

        public function generujOpis()
        {
           $s="<div id='krotki'>";
           $s.=parent::generujOpis();
           $s.="<h3>".$this->naglowek3."</h3>";
           $s.="</div>";
           return $s;
        }
    }
?>