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
    $totaalBestel = 0;

    for ($i = 0; $i < $totalartikel; $i++) { 
        if (!empty($_POST["productID$i"])) { 
            //when NOT empty run code, 0 is empty

            // array gevonden == maak vars
            $productByName  = $artikelen[$i]['artikel'];//array,key,element

            $productByPrice = number_format($artikelen[$i]['prijs'], 2);
            
            $productByUnits = $artikelen[$i]['eenheid'];

            $productByOrder = Test_input($_POST["productID$i"]);
            //VAR bestelde aantal, 'sanitized by function'
            echo $productByOrder;
            if (is_float($productByOrder)) {
                $totaalBestel += number_format(ceil($productByOrder));
            } else if (is_int($productByOrder)) {
                $totaalBestel += intval($productByOrder); // sum eaches
            }

            if ($productByUnits == $gw) {
                $productByTotal =  floatval($productByPrice) * floatval($productByOrder);
                $productByTotal = number_format($productByTotal, 2);
            } else if ($artikelen[$i]['eenheid'] !== $gw) {
                $productByTotal =  floatval($productByPrice) * intval($productByOrder);
                $productByTotal = number_format($productByTotal, 2);
            } // berekening op INT of FLOAT

                //store vars in new array              
                $bestellingen[] = [
                   'artikel'    => $productByName, 
                   'besteld'    => $productByOrder,
                   'prijs'      => $productByPrice, 
                   'eenheid'    => $productByUnits,
                   'bedrag'     => $productByTotal,                                
                ];
                $totaalBedrag += $productByTotal; //sum total 

                
                
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
echo $totaalBestel;
$totaalBesteldeArtikelen = count($bestellingen);
//how many different items are ordered?

/*
echo " <pre>";        
var_dump($bestellingen); // debug          
echo " </pre>";
*/
?>





<!-- header file -->
<?php require_once 'includes/header.php'; ?>




<!--navigationn file-->
<?php require_once 'includes/navmenu.php' ?>
<!--navigationn file-->





<h1 class="rngcenter">Bestel <br><span class="whitetext">overzicht</span></h1>

<!--collapsible-->
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
<!--collapsible end-->


<div class="col-25">
    <div class="container">
        <h4>Cart
            <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b><?php echo $totaalBesteldeArtikelen;?></b>
            </span>
        </h4>
        <?php foreach ($bestellingen as $bestelling) : ?>               
        <p>Artikel: <a href="#"><?php echo $bestelling['artikel'];?></a> 
        <span class="price">Aantal: <?php echo $bestelling['besteld']; 
        if ($bestelling['eenheid'] == $gw) { 
            echo " gr."; 
        } else if ($bestelling['eenheid'] == $ea) {
            echo " $eas";
        } else if ($bestelling['eenheid'] == $unit) {
            echo " bakje van 250 gr.";
        }
        ?>
        , voor €<?php echo $bestelling['prijs'];?> per 
            <?php echo $bestelling['eenheid'];?> voor een totaal van: €
            <?php echo $bestelling['bedrag']; // KORTING NOG BEREKENEN
        endforeach; ?>
<!-- echo ARTIKEL PRIJS per EENHEID = TOTAALPRIJS => kolom
            NA foreach ECHO SUM TOTALS -->

        <hr>
        <p>Totaal <span class="price" style="color:black"><b>€<?php echo number_format($totaalBedrag, 2) ?></b></span></p>
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
