<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="Description" content="index">
    <meta name="Keywords" content="">
    <meta name="Author" content="Adrian Chelstowski">
  <title>Samoloty</title>
  <link rel="stylesheet" href="indeks.css">
</head>

<body id="samoloty">

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

$samoloty = array();
$n = 5;
for($i = 0; $i < $n; $i++)
{
    $zdjecie = "";
    if($i == 0)
    {
        $zdjecie = "samolot";
    }
    else if($i == 1)
    {
        $zdjecie = "samolot1";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }
    else if($i == 2)
    {
        $zdjecie = "samolot2";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }
    else if($i == 3)
    {
        $zdjecie = "samolot3";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }
    else if($i == 4)
    {
        $zdjecie = "samolot4";
        Print("----------------------------------------------------------------------------------------------------------------------------------------------");

    }

  $samoloty[$i] = new Samolot("Boeing 737-40".$i, rand(1990, 2021), "images/".$zdjecie.".jpg", "wygodny", rand(100,300), rand(20,220). "(ton)", rand(2,4));
  $opis = new OpisHtmlDlugiBlok($samoloty[$i]);
  echo $opis->generujOpis();
}
?>
</div>
</body>
</html>
