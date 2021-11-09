<!-- header file -->
<?php
$title = "Contact";
require_once 'includes/header.php'; 
require_once 'includes/functions.php';?>

<!-------------------------------------------navigationn file ------------------------------->
<?php require_once 'includes/navmenu.php' ?>
<!-------------------------------------------navigationn file ------------------------------->

<h1 class="rngcenter">Wil je meer weten: <br><span class="whitetext">neem dan contact op!</span></h1>
<!--collapsible ---------------------------------------------------------------------------------->
<div class="wrap-collabsible">
    <input id="collapsible" class="toggle" type="checkbox">
    <label for="collapsible" class="lbl-toggle">OVER ONS</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <div class="introparagraph">
                <p id="thisisit">
                    Visboer H.A. Ring is sinds 1980 actief in de viswereld. Na het vak te hebben geleerd bij W.
                    Alvis heeft H.A. Ring sinds 2000 zijn eigen viskraampje waar de lekkerste vis wordt verkocht.
                    De liefde voor het visvak is in de loop der jaren gegroeid doordat H.A. Ring zich in
                    verschillende vissoorten heeft gespecialiseerd. Met name over de bereiding daarvan zodat
                    hij de klanten van goed advies kan voorzien.
                </p>
            </div>
        </div>
    </div>
</div>
<!--collapsible end---------------------------------------------------------------------------------->

<h1 class="rngh2">Visboer H.A.</h1>

<div class="centertext">
    <p class="generatedcode">
        Meeuwenlaan 12<br>
        9834 NX Meeuwwijk<br>
        Tel: 088-5959834<br>
        E: haring@haring.nl</p>
</div>

<!--collapsible ---------------------------------------------------------------------------------->
<div class="wrap-collabsible">
    <input id="collapsible2" class="toggle" type="checkbox">
    <label for="collapsible2" class="lbl-toggle">De Opdracht</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <h2>OVERZICHT VAN DE OPDRACHT</h2>
            <ul>
                <p>
                <ul>
                    Op de echte website kan de bezoeker naar een:
                    <li>info-pagina</li>
                    <li>contact-pagina</li>
                    <li>bestelpagina</li>
                </ul>
                <ol>
                    <li>Op de bestelpagina ziet de bezoeker het gehele assortiment aan online bestelbare producten<ul>
                            <li>Zie daarvoor de lijst in bijlage 1 OF (HOME -> prijzen)</li>
                            <li>Om de bezoeker niet voor de gek te houden ziet deze ook de prijzen van de artikelen op het scherm.(HOME -> prijzen)</li>
                    </li>
            </ul>
            <li> Op de info en contact-pagina wilt de visboer in ieder geval zijn eigen contactgegevens terug
                zien. Zie daarvoor bijlage 2. (FOOTER en CONTACT)</li>
<!-- hier werken we met nested ordered/unordered lists om inspringen in teksten te maken voor duidelijkere leesbaarheid -->
            
            <li>De visboer acht het wenselijk dat er één en dezelfde huisstijl wordt aangehouden voor alle
                webpagina’s. Welke stijl dat is maakt de visboer niet uit: <i>“Ik heb verstand van vis en niet van
                    het maken van websites”</i> was het antwoord van de visboer.<br>
                Waar de visboer wel verstand van heeft is zich verplaatsen in een gebruiker op de website.</li>
            </ol>
            </p>

            <h2>BESTEL SERVICE</h2>
            <p>
            <ul>
                <li>De visboer gaat er vanuit dat je ook met gegevensvalidatie om kan gaan. <br>
                    Een gebruiker kan bijvoorbeeld bij de bestelling van aantallen stuks of gram alleen getallen invoeren. <br>
                    <strong>Als er iets gebeurd dat niet logisch klopt krijgt de gebruiker daarvan een melding te zien.</strong></li>
                <li>
                    <ol>
                        <!--1 -->
                        <li>De bezoeker kan aangeven welke artikelen in welke hoeveelheid kan worden besteld.</li>
                        <!--2 -->
                        <li>Aan de hand van de hoeveelheid die de bezoeker wenst wordt een overzicht gemaakt op een
                            nieuwe pagina.
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
                            <ul>
                                <li><i> Hierbij is het belangrijk dat de
                                    voornaam, achternaam, telefoonnummer, email-adres, adres, huisnummer, postcode en
                                    woonplaats van de bezoeker wordt bijgehouden. Het zou fijn zijn als de klant ook kan
                                    aangeven om de bestelling liever in de winkel op te halen.</i></li>
                            </ul>
                        </li>
                        <!--4 -->
                        <li>Als alle gegevens zijn ingevoerd wordt er een pakbon gemaakt op de volgende pagina.
                            <ul>
                                <li> Hier
                                    staan alle gegevens van de vorige twee pagina’s samen en is het ‘contract’ tussen de klant en
                                    de visboer voor het leveren van de bestelling.</li>
                            </ul>
                            Door op bevestigen te klikken komt er een
                            melding dat de klant akkoord is gegaan. Indien gewenst gaat de klant terug naar de
                            home-pagina.
                        </li>
                    </ol>
                </li>
            </ul>
        </div>
    </div>
</div>



<!-- footer file -->
<?php require_once 'includes/footer.php'; ?>