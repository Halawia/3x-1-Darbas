<?php
class Metodai
{

	public function skaiciuoti($sk)
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

	public function intervalas($intervalas)
	{
		$maks = max($intervalas); // Randa maksimalia reiksme intervale
    	$kiekis = array_count_values($intervalas); // Randa kiekvieno elemento pasikartojimo kieki
    	$didz_kiekis = max($kiekis); // Randa daugiausiai pasikartojanciu elementu kieki
    	$daug_iteraciju = array_keys($kiekis, $didz_kiekis); // Randa daugiausiai pasikartojancius elementus
    	$maz_kiekis = min($kiekis); // Randa maziausiai pasikartojaciu elementu kieki
    	$maz_iteraciju = array_keys($kiekis, $maz_kiekis); // Randa maziausiai pasikartojancius elementus

    
    return array(
        'intervalas' => $intervalas,
        'maks' => $maks,
        'daugiausiai_iteraciju_turi' => $daug_iteraciju,  // Grazina rezultatus masyvo pavidalu
        'maziausiai_iteraciju_turi' => $maz_iteraciju
    );
	}
public function aritmetine($a1, $skirtumas)
	{
		$progresija = array();
		for($i = 0; $i < 10; $i++)
		{
			$progresija[] = $a1 + ($i * $skirtumas);
		}
		return $progresija;
	}
}

?>