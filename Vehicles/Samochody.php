<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="Description" content="index">
    <meta name="Keywords" content="">
    <meta name="Author" content="Adrian Chelstowski">
  <title>Samochody</title>
  <link rel="stylesheet" href="indeks.css">
</head>

<body id="samochody">

<div id="menu">

 <id="tytulMenu">
<h2><a href = "index.php">Wszystko</a></h2>
<h2><a href = "Samochody.php">Samochody</a><h2>
<h2><a href = "Hulajnogi.php">Hulajnogi</a></h2>
<h2><a href = "Samoloty.php">Samoloty</a></h2>

</div>
<?php

require_once("OpisHtmlKrotkiBlok.php");
require_once("OpisHtmlDlugiBlok.php");
include "WszystkiePojazdy.php";

$samochody = array();
$n = 5;
for($i = 0; $i < $n; $i++)
{
    $zdjecie = "";
    if($i == 0)
    {
        $zdjecie = "beta";
    }
    else if($i == 1)
    {
        $zdjecie = "beta1";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }
    else if($i == 2)
    {
        $zdjecie = "beta2";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }
    else if($i == 3)
    {
        $zdjecie = "beta3";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }
    else if($i == 4)
    {
        $zdjecie = "beta4";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }

  $samochody[$i] = new Samochod("G2".$i, 2021, "images/".$zdjecie.".jpg", "wygodny", "zimowe/letnie", rand(3,5), rand(180,500)."(koni mechanicznych)");

  $opis = new OpisHtmlDlugiBlok($samochody[$i]);
  echo $opis->generujOpis();
}
?>
</div>
</body>
</html>
