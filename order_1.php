<?php
/**
Order inspection
 */
//require_once 'includes/db_connect.php'; // Database connection file
require 'order_calculate.php';      // collect & process order data

// order form H A Ring Online Bestellen
$title = 'Overzicht Bestelling';
?>


<!-- header file -->
<?php require_once 'includes/header.php'; ?>
<!-- header file -->



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

<!-- cart "header" => total products, both type/amount -->
<div class="col-25">
    <div class="container">
        <h4>Cart
            <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b>Aantal soorten producten: 
                    <?php echo $totaalBesteldeArtikelen;?>
            </b>
            </span><br>
            <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b>Aantal items (gewicht = 1 item) :
                <?php echo $productByAmount ?>
            </b>
            </span>
        </h4>

        <!-- list each price -->
        <!-- echo ARTIKEL PRIJS per EENHEID = TOTAALPRIJS => kolom -->
        <?php foreach ($bestellingen as $bestelling) : ?>               
        <p>Artikel: <a href="#"><?php echo $bestelling['artikel'];?></a> 
        <span class="price">Aantal: <?php echo $bestelling['besteld']; 
        if ($bestelling['eenheid'] == $gw) { 
            echo " gr.";
            $bestelling['eenheid'] = "kg.";
        } else if ($bestelling['eenheid'] == $ea) {
            echo " $eas";
        } else if ($bestelling['eenheid'] == $unit) {
            echo " x bakje, 250 gr.";
            $bestelling['eenheid'] = $ea;
        }
        
        ?>
         ( €<?php echo $bestelling['prijs'];?> per 
            <?php echo $bestelling['eenheid'];?> ) totaal: 
            <strong>€<?php echo $bestelling['bedrag'];?></strong>
            <?php
        endforeach; ?> 

        <hr> <!-- ECHO SUM TOTALS -->
        <p>Sub-Totaal <span class="price" style="color:black"><b>€<?php echo number_format($totaalBedrag, 2) ?></b></span></p>
        <p>Korting <span class="price" style="color:black"><b>€<?php echo number_format($totaalkorting, 2) ?></b></span></p>
        <p>Totaal <span class="price" style="color:black"><b>€<?php echo number_format($totaalBedragKorting, 2) ?></b></span></p>
    </div>
</div>
</div>

<!-- buttons -->
<form method="post" action="delivery_1.php">
    <button type="submit" name="leveren" class="leveren" id="leveren">Aflever adres invullen</button>
</form>

<form action="page_2.php">
    <button type="submit" name="bestellen" class="bestellen" id="bestellen">Terug</button>
</form>



<!-- footer file -->
<?php require_once 'includes/footer.php'; ?>