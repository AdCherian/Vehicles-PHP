<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="Description" content="index">
    <meta name="Keywords" content="">
    <meta name="Author" content="Adrian Chelstowski">
  <title>Wszystko</title>
  <link rel="stylesheet" href="indeks.css">
</head>
<body>

<?php
include "WszystkiePojazdy.php";
$samoloty = array();
$samochody = array();
$hulajnogi = array();
$n = 5;

for($i = 0; $i < $n; $i++)
{
    $samoloty[$i]=new Samolot("Boeing 737-40".$i, rand(2010, 2021), "images/".$i.".jpg", "wygodny", rand(100,300), rand(20,220). "(ton)", rand(2,4));
    $samochody[$i]=new Samochod("G2".$i, 2021, "images/".$i.".jpg", "wygodny", "zimowe/letnie", rand(3,5), rand(180,500)."(koni mechanicznych)");
    $hulajnogi[$i]=new Hulajnoga("Electro1".$i, rand(2019, 2021), "images/".$i.".jpg", "dobry", rand(2,3), rand(1,2), "składany");
}
?>

<div id="menu">
 <div id="tytulMenu">
<h2><a href="index.php">Wszystko</a></h2>
<h2><a href="Samochody.php">Samochody</a></h2>
<h2><a href="Hulajnogi.php">Hulajnogi</a></h2>
<h2><a href="Samoloty.php">Samoloty</a></h2>
</div>

<div id="samoloty">

<h1>Samoloty</h1>
<table>
    <h2><td>Model</td></h2>
    <h2><td>Rok rozpoczęcia produkcji</td></h2>
    <h2><td>Opinia</td></h2>
    <h2><td>Ilość pasażerów</td></h2>
    <h2><td>Ładowność</td></h2>
    <h2><td>Ilość silników</td></h2>
<?php

  function PrintTd($wartosc)
  {
    return "<td>".$wartosc."</td>";
  }
  
  for($i = 0; $i < $n; $i++)
  {
    $zmienna=$samoloty[$i];
    echo "<tr>";
    echo PrintTd($zmienna->getModel());
    echo PrintTd($zmienna->getRokRozpProd());
    echo PrintTd($zmienna->getOpinia());
    echo PrintTd($zmienna->getIloscPasazerow());
    echo PrintTd($zmienna->getLadownosc());
    echo PrintTd($zmienna->getIloscSilnikow());
    echo "</tr>";
  }
?>
</table>

</div>

<div id="samochody">

<h1>Samochody</h1>
<table>
    <h2><td>Model</td></h2>
    <h2><td>Rok rozpoczęcia produkcji</td></h2>
    <h2><td>Opinia</td></h2>
    <h2><td>Opony</td></h2>
    <h2><td>Ilość drzwi</td></h2>
    <h2><td>Moc</td></h2>

<?php
  for($i = 0; $i < $n; $i++)
  {
   $zmienna = $samochody[$i];
    echo "<tr>";
    echo PrintTd($zmienna->getModel());
    echo PrintTd($zmienna->getRokRozpProd());
    echo PrintTd($zmienna->getOpinia());
    echo PrintTd($zmienna->getOpony());
    echo PrintTd($zmienna->getIloscDrzwi());
    echo PrintTd($zmienna->getMoc());
    echo "</tr>";
  }
?>
</table>

</div>

<div id="hulajnogi">

<h1>Hulajnogi</h1>
<table>
  <tr>
    <h2><td>Model</td></h2>
    <h2><td>Rok rozpoczęcia produkcji</td></h2>
    <h2><td>Opinia</td></h2>
    <h2><td>Ilość kół</td></h2>
    <h2><td>Ilosc błotników</td></h2>
    <h2><td>Typ</td></h2>
  </tr>

<?php
  for($i = 0; $i < $n; $i++)
  {
   $zmienna = $hulajnogi[$i];
    echo "<tr>";
    echo PrintTd($zmienna->getModel());
    echo PrintTd($zmienna->getRokRozpProd());
    echo PrintTd($zmienna->getOpinia());
    echo PrintTd($zmienna->getIloscKol());
    echo PrintTd($zmienna->getIloscBlotnikow());
    echo PrintTd($zmienna->getTyp());
    echo "</tr>";
  }
?>
</table>
</div>
</div>
</body>
</html>
