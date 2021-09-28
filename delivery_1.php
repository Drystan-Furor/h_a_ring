<?php
//require_once 'includes/db_connect.php'; // Database connection file
//require_once 'includes/functions.php';  // PHP functions file

//adres entry
$title="Delivery Addres";

require_once 'includes/productdata.php';


session_start();
//get vars from sessions
$vars = $_SESSION['vars'];
$bestellingen = $_SESSION["bestellingen"] ;

$productByAmount = intval($_SESSION['vars']['productByAmount']);
$totaalBesteldeArtikelen = $_SESSION['vars']['totaalBesteldeArtikelen'];
$totaalBedrag = $_SESSION['vars']['totaalBedrag'];
$totaalkorting = $_SESSION['vars']['totaalkorting'];
$totaalBedragKorting = $_SESSION['vars']['totaalBedragKorting'];


?>

<!-- header file -->
<?php require_once 'includes/header.php'; ?>
<!-- header file -->

<!--navigationn file-->
<?php require_once 'includes/navmenu.php' ?>
<!--navigationn file-->



<h1 class="rngcenter">Uw Gegevens <br><span class="whitetext">invullen</span></h1>

<!--collapsible end-->
<div class="wrap-collabsible">
    <input id="collapsible" class="toggle" type="checkbox">
    <label for="collapsible" class="lbl-toggle">Vis naar Info</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <div class="introparagraph">
                <p id="thisisit">
                <h2>BESTEL SERVICE</h2>
                <p>
                <ul>
                    <li>De visboer gaat er vanuit dat je ook met gegevensvalidatie om kan gaan. <br>
                        Een gebruiker kan bijvoorbeeld bij de bestelling van aantallen stuks of gram alleen getallen invoeren. <br>
                        <strong>Als er iets gebeurd dat niet logisch klopt krijgt de gebruiker daarvan een melding te zien.</strong>
                    </li>
                    <li>
                        <ol>
                            <!--3 -->
                            <li>Als de bezoeker dit overzicht heeft gecontroleerd kan er naar een pagina worden gegaan
                                voor het opgeven van de bezorg- en factuurgegevens.
                                <ul>
                                    <li><i> Hierbij is het belangrijk dat de
                                            voornaam, achternaam, telefoonnummer, email-adres, adres, huisnummer, postcode en
                                            woonplaats van de bezoeker wordt bijgehouden. Het zou fijn zijn als de klant ook kan
                                            aangeven om de bestelling liever in de winkel op te halen.</i></li>
                                </ul>
                            </li>
                            <!--4 -->
                            <li>Als alle gegevens zijn ingevoerd wordt er een pakbon gemaakt op de volgende pagina.
                            </li>
                        </ol>
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>
<!--collapsible end-->


<!-- gegevens formmulier -->
<div class="row" id="gegevens">
  <div class="col-75">
    <div class="container">
      <form action="confirm_order_1.php" method="post">

        <div class="row">
          <div class="col-50">
            <h3>Factuur Adres</h3><!--NAAM ADRES POSTCODE ETC -->
            <label for="fname"><i class="fa fa-user"></i> Naam</label>
            <input type="text" id="fname" name="firstname" placeholder="Pangasius S Karper" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="goudvis@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
            <input type="text" id="adr" name="address" placeholder="Visscherstraat 76" required>
            <label for="city"><i class="fa fa-institution"></i> Stad</label>
            <input type="text" id="city" name="city" placeholder="Visvliet">

            <div class="row">
              <div class="col-50">
                <label for="state">Provincie</label>
                <input type="text" id="state" name="state" placeholder="Zeeland">
              </div>
              <div class="col-50">
                <label for="zip">Postcode</label>
                <input type="text" id="zip" name="zip" placeholder="4301 AB" required>
              </div>
            </div>
          </div>

          <!--CREDITCARD -->
          <div class="col-50">
            <h3>Betaalwijze</h3>
            <label for="fname">Credit Card</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Naam Pashouder</label>
            <input type="text" id="cname" name="cardname" placeholder="Pangasius Snoek Karper" required>
            <label for="ccnum">Credit card nummer</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1324-5678-9012-3456" required>
            <label for="expmonth">Verval Maand</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Verval jaar</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Aflever adres is factuur adres
        </label><br>
        <label>
          <input type="checkbox"  name="pickup"> Ik kom mijn bestelling ophalen in de winkel
        </label>
        <input type="submit" name="checkout" value="Verder naar afrekenen" class="btn" id="afrekenen">
      </form>
    </div>
  </div>

<!-- cart "header" => total products, both type/amount -->
<div class="col-25">
    <div class="container">
        <h4>Cart
            <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b>producten: 
                    <?php echo $totaalBesteldeArtikelen;?>
            </b>
            </span><br>
            <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b>(gewicht = 1 item) items:
                <?php echo $productByAmount ?>
            </b>
            </span>
        </h4>

        <!-- list each price -->
        <!-- echo ARTIKEL PRIJS per EENHEID = TOTAALPRIJS => kolom -->
        <?php foreach ($bestellingen as $bestelling) : ?>
        <p><a href="#"><?php echo $bestelling['artikel'];?></a>
        <span class="price"><?php 
        if ($bestelling['eenheid'] == $gw) { 
            echo number_format($bestelling['besteld'], 3) . "kg";
            $bestelling['eenheid'] = "kg.";
        } else if ($bestelling['eenheid'] == $ea) {
            echo $bestelling['besteld'] . "x";
        } else if ($bestelling['eenheid'] == $unit) {
            echo $bestelling['besteld'] . "x 250gr";
            $bestelling['eenheid'] = $ea;
        }
        ?>
        (€<?php echo $bestelling['prijs'];?>p/
            <?php echo $bestelling['eenheid'];?>): 
            <strong>€<?php echo $bestelling['bedrag'];?></strong>
            <?php 
        endforeach; ?> </p><br>

        <hr> <!-- ECHO SUM TOTALS -->
        <p>Sub-Totaal <span class="price" style="color:black"><b>€<?php echo number_format($totaalBedrag, 2) ?></b></span></p>
        <p>Korting <span class="price" style="color:black"><b>€<?php echo number_format($totaalkorting, 2) ?></b></span></p>
        <p>Totaal <span class="price" style="color:black"><b>€<?php echo number_format($totaalBedragKorting, 2) ?></b></span></p>
    </div>
</div>
</div>



<!-- footer file -->
<?php require_once 'includes/footer.php'; ?>