<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="Description" content="index">
    <meta name="Keywords" content="">
    <meta name="Author" content="Adrian Chelstowski">
  <title>Hulajnogi</title>
  <link rel="stylesheet" href="indeks.css">
</head>

<body id="hulajnogi">

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

$hulajnogi = array();
$n = 5;
for($i = 0; $i < $n; $i++)
{
    $zdjecie="";
    if($i == 0)
    {
        $zdjecie = "hulajnoga";
    }
    else if($i == 1)
    {
        $zdjecie = "hulajnoga1";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }
    else if($i == 2)
    {
        $zdjecie = "hulajnoga2";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }
    else if($i == 3)
    {
        $zdjecie = "hulajnoga3";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }
    else if($i == 4)
    {
        $zdjecie = "hulajnoga4";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }


  $hulajnogi[$i] = new Hulajnoga("Electro1".$i, rand(2019, 2021), "images/".$zdjecie.".jpg", "dobry", rand(2,3), rand(1,2), "składany");
  $opis = new OpisHtmlDlugiBlok($hulajnogi[$i]);
  echo $opis->generujOpis();
}
?>
</div>
</body>
</html>
