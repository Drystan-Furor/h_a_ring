<?php
/**
 Bestel Pagina 
 */
require_once 'includes/functions.php';
require_once 'includes/productdata.php';
$title = "Bestel";
?>


<!-- header file -->
<?php
require_once 'includes/header.php';
?>
<!-- header file -->

<!--navigationn file-->
<?php require_once 'includes/navmenu.php' ?>
<!--navigationn file-->


<h1 class="rngcenter">ONLINE <br><span class="whitetext">bestellen</span></h1>

<!--collapsible-->
<div class="wrap-collabsible">
    <input id="collapsible" class="toggle" type="checkbox">
    <label for="collapsible" class="lbl-toggle">Vis naar Info</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <div class="introparagraph" id="thisisit">
                <h2>BESTEL SERVICE</h2>
                <ul>
                    <li>De visboer gaat er vanuit dat je ook met gegevensvalidatie om kan gaan. <br>
                        Een gebruiker kan bijvoorbeeld bij de bestelling van aantallen stuks of gram alleen getallen invoeren. <br>
                        <strong>Als er iets gebeurd dat niet logisch klopt krijgt de gebruiker daarvan een melding te zien.</strong>
                    </li>
                    <li>
                        <ol>
                            <!--1 -->
                            <li>De bezoeker kan aangeven welke artikelen in welke hoeveelheid kan worden besteld.</li>
                            <!--2 -->
                            <li>Aan de hand van de hoeveelheid die de bezoeker wenst wordt een overzicht gemaakt op een
                                nieuwe pagina.
                            </li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--collapsible end-->




<!-- prijstabel -->
<!--generate unique ID's foreach-productID0, productID1 etc.-->
<div class="centertext">
    <div class="centertable">
    <form method="post" action="order_1.php">
        <table class="generatedcode">
            <tr>
                <th>Artikel</th>
                <th>Prijs</th>
                <th>per Eenheid</th>
                <th>Hoeveel wilt u bestellen?</th>
            </tr>

            <?php
            $i = 0;
            foreach ($artikelen as $artikel) : ?>                
                <tr>
                    <td><?php echo $artikel['artikel']; ?></td>
                    <td>€ <?php echo number_format($artikel['prijs'], 2); ?></td>
                    <td><?php echo $artikel['eenheid']; ?></td>
                    <td><input type="number" name="productID<?php echo $i?>" min="0" max="99" 
                    <?php                    
                    if ($artikel['eenheid'] == $gw) : 
                        echo $step;
                    endif ?>></td>                     
                    <!--only unique ID's-->
                </tr>
                <?php $i++;
            endforeach ?>
        </table>
        <button type="submit" class="bestellen" id="bestellen" name="bestellen">Bestellen</button>
    </form>
    </div>
</div>

<!--korting-->
<div class="centertext">
                <h2>KORTING</h2>
                <p>
    Als u van een soort product 3 of meer besteld, dan krijgt u €0,09 korting per stuk.
    Dit zult u aangegeven zien in het bestel overzicht.
                </p>

</div>
<!--collapsible end-->



<!-- footer file -->
<?php require_once 'includes/footer.php'; ?>
