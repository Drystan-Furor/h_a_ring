<?php
/**
Als er van 
    Array['Element']
    vb: 7 zijn besteld van artikel 1, DAN $_POST['productID0'] === 7 
    MAAR productID0 !== ['productID'] => 0
    productID[$i] == reference aan [productIDvar] op page_2.php
    MAAR 'productID0' bestaat niet in $artikelen 
    koppel productID0 aan [productID] => 0
    $var = $array[$key]['element'];
 */
//require_once 'includes/db_connect.php'; // Database connection file
require 'includes/functions.php';  // PHP functions file


// order form H A Ring Online Bestellen
$title = 'Overzicht Bestelling';



    // isset(): returns true even if empty; 
    // array_key_exists() returns true even if empty;
    // empty() returns if isset=>true, and
    // array_key_exist() => true, BUT VALUE NOT [null; 0, '',]

if (isset($_POST['bestellen'])) { 
    // if <button> is clicked
    $totaalBedrag = 0;
    $productByAmount = 0;
    $discount = 0.09;
    $totaalkorting = 0;

    for ($i = 0; $i < $totalartikel; $i++) { 
        if (!empty($_POST["productID$i"])) { 
            //when NOT empty run code, 0 is empty
 
            //  set var by array key
            $productByName  = $artikelen[$i]['artikel'];//array,key,element

            $productByPrice = number_format($artikelen[$i]['prijs'], 2);
            
            $productByUnits = $artikelen[$i]['eenheid'];

            $productByOrder = Test_input($_POST["productID$i"]);           
            //VAR order amount, 'sanitized by function'

            $productByAmount += intval(number_format(ceil($productByOrder)));
            // sum total items   
                

            if ($productByUnits == $gw) {
                $productByTotal =  floatval($productByPrice) * floatval($productByOrder);
                $productByTotal = number_format($productByTotal, 2);
                $productByDiscount = intval(ceil(($productByOrder))) * $discount;
            } else if ($artikelen[$i]['eenheid'] !== $gw) {
                $productByTotal =  floatval($productByPrice) * intval($productByOrder);
                $productByTotal = number_format($productByTotal, 2);
                $productByDiscount = intval(($productByOrder)) * $discount;
            } // berekening op INT of FLOAT

                //store vars in new array              
                $bestellingen[] = [
                   'artikel'    => $productByName, 
                   'besteld'    => $productByOrder,
                   'prijs'      => $productByPrice, 
                   'eenheid'    => $productByUnits,
                   'bedrag'     => $productByTotal, 
                   'korting'    => $productByDiscount,                          
                ];
                $totaalBedrag += $productByTotal; //sum total 
                $totaalkorting += $productByDiscount;
  

                // array string concat {debug purposes}
                $kassabon[] = [//kassabon
                    $productByName . "  " . //van DIT artikel
                    $productByOrder . " x " . // is ZOVEEL besteld
                    $productByPrice . " per " . // voor EURO
                    $productByUnits . " = €" . // PER gewicht / stuks / bakje
                    $productByTotal            // TOTAAL = 'besteld' x 'prijs'
                ];
        }       
    }
}
$totaalBesteldeArtikelen = count($bestellingen);
$totaalBedragKorting = $totaalBedrag - $totaalkorting;
//how many different items are ordered?

?>