<?php

require 'metodai.php';

$skaicius = $_POST['skaicius'];		// Kintamajam priskiriamas pradinis skaicius
$objektas = new Metodai(); // sukuriamas klases objektas
$a1 = $_POST['a1']; // kintamajam priskiriamas pradinis artimetines progresijos skaicius
$skirtumas = $_POST['skirtumas']; // kintamajam priskiriamas aritmetines progresijos skirtumas
$progresija = $objektas->aritmetine($a1, $skirtumas);
$iteracijos = count($objektas->skaiciuoti($skaicius));			//Skaiciuoja elementu kieki masyve
echo "Iteraciju kiekis: $iteracijos </br>";
echo "Masyvas:";
print "<pre>";
print_r($objektas->skaiciuoti($skaicius));			//Isveda visas gautas reiksmes i masyva
print "</pre>";


$intervalas = [4, 18, 10, 23, 7, 4, 25, 15, 9, 20, 6, 12, 3, 22, 10, 4];

// Kvieciama funkcija ir talpinami rezultatai
$result = $objektas->intervalas($intervalas);


echo "Intervalas:";
print "<pre>";
print_r($result['intervalas']); // Isveda intervala masyvo pavidalu
print "</pre>";
echo "Maksimali reiksme: " . $result['maks'] . "</br>";
echo "Daugiausiai iteraciju turi: ";
echo implode(", ", $result['daugiausiai_iteraciju_turi']); 
echo "</br>";
echo "Maziausiai iteraciju turi: ";
echo implode(", ", $result['maziausiai_iteraciju_turi']);
echo "</br>";


echo "Aritmetine progresija: </br>";
print "<pre>";
print_r($progresija);  // Spausdinama aritmetine progresija
print "</pre>";
?>