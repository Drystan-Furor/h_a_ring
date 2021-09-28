<?php



/**
 Basic Array
 Artikel toevoegen of verwijderen?
 voer array in
 */
//---------------------------------------------------product library 
$gw = "Kilogram"; //gross weight / GeWicht
$eas = "stuks"; //eaches
$ea = "stuk"; // Each && 1 each
$unit = "voorverpakt, 250 gr."; //uitzondering


$artikelen = [
    ['artikel' => "Visfriet",       'eenheid' => $unit, 'productID' => 0, 'prijs' => 3.50,],
    ['artikel' => "Kibbeling",      'eenheid' => $gw,   'productID' => 1, 'prijs' => 11.00,],
    ['artikel' => "Zalmsnacks",     'eenheid' => $ea,   'productID' => 2, 'prijs' => 3.95,],
    ['artikel' => "Verse Zalmmoot", 'eenheid' => $gw,   'productID' => 3, 'prijs' => 32.50,],
    ['artikel' => "Dorade",         'eenheid' => $gw,   'productID' => 4, 'prijs' => 11.43,],
    ['artikel' => "Ravigottesaus",  'eenheid' => $ea,   'productID' => 5, 'prijs' => 0.60,],
    ['artikel' => "Knoflooksaus",   'eenheid' => $ea,   'productID' => 6, 'prijs' => 0.60,],
    ['artikel' => "Cocktailsaus",   'eenheid' => $ea,   'productID' => 7, 'prijs' => 0.60,],
];

$discount = 0.09;
$totalartikel = count($artikelen);//count array once, not in for loop

//-------dirty VAR, no <HTML> in PHP string.
$step = 'step="0.01"';
