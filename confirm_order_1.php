<?php
session_start();
//require_once 'includes/db_connect.php'; // Database connection file
require_once 'includes/productdata.php';
require_once 'delivery_process.php';

$title = 'Afronden';



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

<h1 class="rngcenter">CONTROLEER <br><span class="whitetext">uw bestelling</span></h1>

<!--collapsible -->
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
                            <!--1 -->
                            <li>
                                 Hier
                                staan alle gegevens van de vorige twee pagina’s samen en is het ‘contract’ tussen de klant en
                                de visboer voor het leveren van de bestelling.</li>
                                
                                Door op bevestigen te klikken komt er een
                                melding dat de klant akkoord is gegaan. Indien gewenst gaat de klant terug naar de
                                home-pagina.
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


<!--     
    $userEmail 
    $userAddress
    $userCity 
    $userProvincie 
    $userPostcode 

    //card data
    $cardName
    $cardNumber
    $expiryMonth
    $expiryYear
    $cardValidationValue
   -->
   <!--gegevens invullen, en bestelling laten  zien -->

<div class="row" id="gegevens">
  <div class="col-75">
    <div class="container">
      <form method="post">

        <div class="row">
          <div class="col-50">
            <h3>Factuur Adres</h3>
            <label for="fname"><i class="fa fa-user"></i> Naam</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $userName?>" readonly>

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $userEmail?>" readonly>

            <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
            <input type="text" id="adr" name="address" value="<?php echo $userAddress?>" readonly>

            <label for="city"><i class="fa fa-institution"></i> Stad</label>
            <input type="text" id="city" name="city" value="<?php echo $userCity?>" readonly>

            <div class="row">
              <div class="col-50">
                <label for="state">Provincie</label>
                <input type="text" id="state" name="state" value="<?php echo $userProvincie?>" readonly>
              </div>
              <div class="col-50">
                <label for="zip">Postcode</label>
                <input type="text" id="zip" name="zip" value="<?php echo $userPostcode?>" readonly>
              </div>
            </div>
          </div>

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
            <input type="text" id="cname" name="cardname" value="<?php echo $cardName?>" readonly>
            <label for="ccnum">Credit card nummer</label>
            <input type="text" id="ccnum" name="cardnumber" value="<?php echo $cardNumber?>" readonly>
            <label for="expmonth">Verval Maand</label>
            <input type="text" id="expmonth" name="expmonth" value="<?php echo $expiryMonth?>" readonly>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Verval jaar</label>
                <input type="text" id="expyear" name="expyear" value="<?php echo $expiryYear?>" readonly>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" value="<?php echo $cardValidationValue?>" readonly>
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" 
          <?php if (isset($_POST["sameadr"])) {
                        echo 'checked="checked" ';
          }?>
            name="sameadr" onclick="return false;" onkeydown="return false;"> Aflever adres is factuur adres
        </label><br>

        <label>
          <input type="checkbox" 
          <?php if (isset($_POST["pickup"])) {
                        echo 'checked="checked" ';
          }?>
          name="pickup"  onclick="return false;" onkeydown="return false;"> Ik kom mijn bestelling ophalen in de winkel
        </label>
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

<!-- on button click, ask to return home or bestellen -->
<button type="submit" name="payment" class="payment" id="payment" onclick="conclude()">Betalen</button>


<script>
function conclude() {
    alert("Bedankt voor uw bestelling!");
    if (confirm("Wilt u meer bestellen?")) {
        //go to page 2
        location.href = "page_2.php";
    } else {
        //go to page 3
        location.href = "page_3.php";  
    }
}
</script>

<!-- footer file -->
<?php require_once 'includes/footer.php'; ?>
