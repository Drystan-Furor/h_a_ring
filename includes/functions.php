<?php

error_reporting(E_ALL);


/*


*/

/** 
  Time based greeting
 */
function greet()
{
    $hour = date("H");
    if ($hour >= 0 && $hour < 6) {
        $greet = "Goedenacht, ";
    } else if ($hour >= 6 && $hour < 12) {
        $greet = "Goedemorgen, ";
    } else if ($hour >= 12 && $hour < 18) {
        $greet = "Goede middag, ";
    } else if ($hour >= 18 && $hour < 24) {
        $greet = "Goede avond, ";
    } else {
        $greet = "Hallo, ";
    }

    return "$greet";
}

/**
 Create a function that will do all the checking for us
 */
function Test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//product library -------------------------------------------------------------------
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

$totalartikel = count($artikelen);

$step = 'step="0.01"';


//$_POST['productID' . $i];




