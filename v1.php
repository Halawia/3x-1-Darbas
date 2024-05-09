<?php

function skaiciuoti($sk)
{
	$masyvas = [$sk];				// Sukuriamas masyvas sudeti gaunamus skaicius
	while($sk > 1)					// Vykdomas ciklas, kol skaiciaus didesnis uz 1
	{
		if($sk % 2 == 0)
		{
			$sk = $sk / 2;			// Jei elementas yra lyginis, dalinama is 2 
		}
		else
		{
			$sk = 3 * $sk + 1;		// Jei elementas yra nelyginis, dauginama is 3 ir pridedamas 1
		}
		array_push($masyvas, $sk);	// Gauti nauji elementai sudedami i masyva
	}
	
	return $masyvas;
}

	$skaicius = $_POST['skaicius'];						// Paema ivesta skaiciu is serverio naudojant POST metoda, priskiria skaiciu kintamajam
	$iteracijos = count(skaiciuoti($skaicius));			// Skaiciuoja elementu kieki masyve
	echo "Iteraciju kiekis: $iteracijos </br>";
	echo "Masyvas:";
	print "<pre>";
	print_r(skaiciuoti($skaicius));			// Isveda visas gautas reiksmes i masyva
	print "</pre>";

?>