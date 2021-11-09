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
require 'includes/functions.php';  // PHP functions file
require 'includes/productdata.php';

    // isset(): returns true even if empty; 
    // array_key_exists() returns true when set but still empty;
    // empty() returns if isset=>true, AND
    //      array_key_exist() => true, BUT VALUE NOT [null; 0, '',]
//this is the php file that calculates prices based on user input
if (isset($_POST['bestellen'])) { 
    // if <button> is clicked
    $totaalBedrag = 0;
    $productByAmount = 0;
    //$discount = 0.09;
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
        } 
    }  
    if (empty($bestellingen)) {
        header('Location: http://localhost/h_a_ring/page_2.php');
        exit();
    }    
    $totaalBesteldeArtikelen = count($bestellingen);
    $totaalBedragKorting = $totaalBedrag - $totaalkorting;
} 

$vars = [
    'totaalBesteldeArtikelen' => $totaalBesteldeArtikelen,
    'totaalBedrag' => $totaalBedrag,
    'totaalkorting' => $totaalkorting,
    'totaalBedragKorting' => $totaalBedragKorting,
    'productByAmount' => $productByAmount,
];

$_SESSION["bestellingen"] = $bestellingen ;
$_SESSION['vars'] = $vars;
