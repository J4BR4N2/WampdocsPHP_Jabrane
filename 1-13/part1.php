<?php
/*
	PHP-TOETS — BESTANDEN 01 T.E.M. 13

	Tijd: 2 lesuren (richttijd: deel 1 = 45 min., deel 2 = 55 min.)

	DEEL 1 — ZONDER INTERNET OF EIGEN DOCUMENTATIE                  			/40
	Werk in dit bestand. Gebruik echo om resultaten te tonen waar gevraagd.
	Schrijf je code telkens onder de vraag. Bestaande code mag je aanvullen.

	DEEL 2 — MET INTERNET EN EIGEN DOCUMENTATIE                    				/30
	Je mag dit deel thuis afwerken als je niet klaar raakt, maar het
	thuis afgewerkte deel telt slechts gedeeltelijk mee (afspraak leerkracht).

	TOTAAL                                                               		/70
*/


//=1===================================================================
// Maak drie variabelen met onderstaande waarden en toon telkens de
// waarde en het datatype in de browser
// - een kommagetal: 7,5
// - een tekst "PHP"
// - een 'true' value
// Maak daarna een variabele met de waarden "rood" en "blauw". 
// Toon ook deze data in de browser op een gepaste manier.
//=================================================================/5=

$kommagetal = 7.5;
$php = "PHP";
$true = true;

echo $kommagetal . "<br>";
echo $php . "<br>";
echo $true . "<br>";
//echo $waarden;


$waarden = ["rood", "blauw"];
foreach ($waarden as $waarde) {
	//echo $waarden . "<br>";
}





//=2===================================================================
// Bereken en toon:
// - de totale prijs
// - de prijs na een korting van 5 euro
// - de rest bij het delen van de totale prijs door 4
//=================================================================/4=

$prijs = 19;
$aantal = 3;

$totaal =$prijs * $aantal;
$korting = $totaal - 5;
$rest = $totaal % 4;

echo "Totale prijs: " . $totaal . "<br>";
echo "Prijs na korting: " . $korting . "<br>";
echo "rest bij delen door 4: " . $rest . "<br>". "<br>";



//=3===================================================================
// Maak een variabele .
// Toon "Toegang toegestaan" als de bezoeker MINSTENS 16 jaar is
// EN een ticket heeft. Toon anders "Toegang geweigerd".
// Toon daarna "Gratis toegang" wanneer de leeftijd kleiner dan 12
// OF groter dan of gelijk aan 65 is. Toon anders "Betalen".
//=================================================================/5=
$leeftijd = 17;
$heeftTicket = true;

if ($leeftijd >= 16 && $heeftTicket) {
	echo "Toegang toegestaan" . "<br>";
}else {
	echo "Toegang geweigerd" . "<br>";
}

if ($leeftijd < 12 || $leeftijd >= 65) {
	echo "Gratis toegang" . "<br>";
}else {
	echo "Betalen" . "<br>" . "<br>";
}



//=4===================================================================
// Gebruik de variabele en toon:
// - de waarde afgerond naar boven 
// - de waarde afgerond naar beneden
// - de waarde afgerond tot een geheel getal.
//=================================================================/3=
$getal = -8.7;

echo "Afgerond naar boven: " . ceil($getal) ."<br>";
echo "Afgerond naar beneden: " . floor($getal) . "<br>";
echo "Afgerond tot geheel getal: " . round($getal) . "<br>" . "<br>";


//=5===================================================================
// Gebruik een for-loop om de getallen 2, 4, 6, 8 en 10 te tonen.
// Gebruik daarna een foreach om alle waarden uit onderstaande
// array te tonen, telkens gevolgd door een spatie.
//=================================================================/5=
$kleuren = ["rood", "groen", "blauw"];

for ($i = 2; $i<=10; $i +=2 ) { 
	echo $i . "<br>";
}

$kleuren = ["rood", "groen", "blauw"];
foreach ($kleuren as $kleur) {
	echo $kleur . " " . "<br>";
}


//=6===================================================================
// Schrijf een functie berekenPrijs() die de totale prijs berekent
// Aan het einde stuurt deze met return de prijs terug.
// De functie ontvangt volgende data:
// - een prijs 
// - een aantal (fallback 1)
//
// Roep de functie tweemaal op:
// - met prijs 12 en aantal 4
// - met enkel prijs 9
//=================================================================/5=

function berekenPrijs($prijs, $aantal = 1){
	$totaal = $prijs * $aantal;
	return $totaal;
}
echo berekenPrijs(12, 4) . "<br>";
echo berekenPrijs(9) . "<br>" . "<br>";

//=7===================================================================
// Met behulp van String functions;
// - Verwijder de spaties vooraan en achteraan.
// - Toon de tekst volledig in kleine letters.
// - Toon het aantal tekens van de tekst ZONDER de extra spaties.
// - Vervang "PHP" door "programmeren" en toon het resultaat.
//=================================================================/4=
$zin = "  Welkom bij PHP!  ";



echo strolower($proper);
echo strlen($proper);

//=8===================================================================
// Leg het verschil uit tussen GET en POST. 
// Toon hoe je de data kan ophalen en hoe je GET manueel kan meesturen.
//=================================================================/4=

//GET geeft eigenlijk data mee dat zichtbaar is in de url,
//terwijl POST de data verborgen gaat meesturen via een formulier dus dat is niet zichtbaar in de formulier.

echo $_GET["naam"];

//http://localhost/1-13/part1.php?naam=Jabrane