<?php
//require_once 'includes/db_connect.php'; // Database connection file
require_once 'includes/functions.php';  // PHP functions file
//adres entry
$title="Delivery Addres";

?>

<!-- header file -->
<?php require_once 'includes/header.php'; ?>

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


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="confirm_order_1.php" method="post">

        <div class="row">
          <div class="col-50">
            <h3>Factuur Adres</h3>
            <label for="fname"><i class="fa fa-user"></i> Naam</label>
            <input type="text" id="fname" name="firstname" placeholder="Pangasius S Karper">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="goudvis@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
            <input type="text" id="adr" name="address" placeholder="Visscherstraat 76">
            <label for="city"><i class="fa fa-institution"></i> Stad</label>
            <input type="text" id="city" name="city" placeholder="Visvliet">

            <div class="row">
              <div class="col-50">
                <label for="state">Provincie</label>
                <input type="text" id="state" name="state" placeholder="Zeeland">
              </div>
              <div class="col-50">
                <label for="zip">Poscode</label>
                <input type="text" id="zip" name="zip" placeholder="4301 AB">
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
            <input type="text" id="cname" name="cardname" placeholder="Pangasius Snoek Karper">
            <label for="ccnum">Credit card nummer</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1324-5678-9012-3456">
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
        </label>
        <input type="submit" value="Verder naar afrekenen" class="btn" id="afrekenen">
      </form>
    </div>
  </div>

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


<form>
<button type="submit" class="bestellen" id="terug" name="bestellen" onclick="history.go(-1)">Terug</button>
        </form>


<!-- footer file -->
<?php require_once 'includes/footer.php'; ?>