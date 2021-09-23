<?php
//require_once 'includes/db_connect.php'; // Database connection file
require 'includes/functions.php';  // PHP functions file
// order form
$title = 'Overzicht Bestelling';

/**
Als er van 
    ['artikel' => "Visfriet",       'eenheid' => $unit, 'productID' => 0, 'prijs' => 3.50,]
    voorbeeld: 7 zijn besteld van artikel 1, DAN 'productID0' === 7 
    MAAR productID0 !== ['productID'] => 0
    productID[$i] == reference aan [productIDvar] op page_2.php
    MAAR productID0 bestaat niet in $artikelen 
    koppel productID0 aan [productID] => 0
    $var = $array[$key]['element'];
 */

                        // isset(): returns true even if empty; 
                        // array_key_exists() returns true even if empty;
                        // empty() returns if isset=>true, 
                        // array_key_exist() => true, BUT VALUE NOT [null; 0, '',]

if (isset($_POST['bestellen'])) { 
    // if <button> is clicked
    
    for ($i = 0; $i < $totalartikel; $i++) { 
        echo $i;
        if (!empty($_POST["productID$i"])) { //1 == visfriet
            //when NOT empty run code, 0 is empty
            
            $productByOrder = Test_input($_POST["productID$i"]); //1 => var
            //VAR bestelde aantal, 'sanitized by function'

            //search ID, find product NAME
            if (array_search($i, array_column($artikelen, 'productID'))) { // 1!=2 toch Kibbeling, niet visfriet, is $i dan ++?
                // array gevonden == maak vars
                $productByName  = $artikelen[$i]['artikel'];//array,key,element

                $productByPrice = number_format($artikelen[$i]['prijs'], 2);
                
                $productByUnits = $artikelen[$i]['eenheid'];

                //vars naar array              
                $bestellingen[] = [
                   'artikel'    => $productByName, 
                   'besteld'    => $productByOrder,
                   'prijs'      => $productByPrice, 
                   'eenheid'    => $productByUnits,                   
                ];
                
            }

        }       
    }
} 

echo " <pre>";        
var_dump($bestellingen);           
echo " </pre>";
            
                /*
                $kassabon  
                    = "<p>Artikel:" . $productByName . "<br>" .
                    " Besteld aantal: " . 
                    $productByOrder . " " . $productByUnits . "<br>" .
                    " Prijs per " . $productByUnits . ": €" . 
                    number_format($productByPrice, 2) . 
                    "</p>"
                ;
                */
                //print_r($kassabon, true);

      /*          
foreach ($bestellingen as $bestelling) {
    echo $bestelling;
}     */
    // echo de bestelling
    // bereken de prijs
    //echo de berekening



?>

<!-- header file -->
<?php require_once 'includes/header.php'; ?>

<!----------------------------navigationn file ------------------------------->
<?php require_once 'includes/navmenu.php' ?>
<!----------------------------navigationn file ------------------------------->

<h1 class="rngcenter">Bestel <br><span class="whitetext">overzicht</span></h1>

<!--collapsible ---------------------------------------------------------------->
<div class="wrap-collabsible">
    <input id="collapsible" class="toggle" type="checkbox">
    <label for="collapsible" class="lbl-toggle">Vis naar Info</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <div class="introparagraph">
                <p id="thisisit">
                <h2>BESTEL SERVICE</h2>
                <ol>
                    <!--2 -->
                    <li>Aan de hand van de hoeveelheid die de bezoeker wenst wordt een overzicht gemaakt op deze pagina.
                        <ul>
                            <li> <i>Hier is te zien welke artikelen zijn besteld, hoe de berekening van de prijs van
                                    het artikel tot stand is gekomen, de totaalprijs en de eventuele korting.
                                    De visboer is overigens geen gierige krent en geeft aan dat als een klant 3 artikelen of meer van dezelfde
                                    product heeft, per artikel er een korting van €0,09 cent geldt.</i></li>
                        </ul>
                    </li>
                    <!--3 -->
                    <li>Als de bezoeker dit overzicht heeft gecontroleerd kan er naar een pagina worden gegaan
                        voor het opgeven van de bezorg- en factuurgegevens.
                    </li>
                </ol>
                </p>
            </div>
        </div>
    </div>
</div>
<!--collapsible end--------------------------------------------------------------->



<div class="col-25">
    <div class="container">
        <h4>Cart
            <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b>4</b>
            </span>
        </h4>
        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
</div>
</div>

<form action="delivery_1.php">
    <button type="submit" name="bestellen" class="bestellen" id="bestellen">Aflever adres invullen</button>
</form>

<form action="page_2.php">
    <button type="submit" name="bestellen" class="bestellen" id="bestellen">Terug</button>
</form>



<!-- footer file -->
<?php require_once 'includes/footer.php'; ?>
