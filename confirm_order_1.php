<?php
//require_once 'includes/db_connect.php'; // Database connection file
require_once 'includes/functions.php';  // PHP functions file

$title = 'Afronden';
?>

<!-- header file -->
<?php require_once 'includes/header.php'; ?>

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







<form action="page_2.php">
  <button type="submit" name="bestellen" class="bestellen" id="bestellen">Afronden</button>
</form>

<form>
  <button type="submit" name="bestellen" class="bestellen" id="bestellen" onclick="history.back()">Terug</button>
</form>

<!-- footer file -->
<?php require_once 'includes/footer.php'; ?>