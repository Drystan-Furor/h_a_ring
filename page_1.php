<!-- header file -->
<?php
$title = "Home";
require_once 'includes/header.php'; 
require_once 'includes/functions.php';?>


<!-------------------------------------------navigationn file ------------------------------->
<?php require_once 'includes/navmenu.php' ?>
<!-------------------------------------------navigationn file ------------------------------->



<h1 class="rngcenter">Visboer <br><span class="whitetext">H.A. Ring</span></h1>

<!--collapsible ---------------------------------------------------------------------------------->
<div class="wrap-collabsible">
    <input id="collapsible" class="toggle" type="checkbox">
    <label for="collapsible" class="lbl-toggle">Vis naar Info</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <div class="introparagraph">
                <p id="thisisit">
                    Visboer H.A. Ring wilt graag een update van zijn website. Na 10 jaar is de huidige website
                    verouderd en ook niet gebruiksvriendelijk voor de huidige tijd. Omdat het updaten van de
                    huidige website teveel geld kost wilt de visboer een nieuwe website laten ontwikkelen.
                    In het interview met de visboer kwam naar voren hoe hij de website in zijn gedachten voor
                    zich ziet. Als de bezoeker van de website naar zijn site gaat dan is er een welkomstscherm
                    waarop de gebruiker op een mooie visplaatje kan klikken om naar de ‘echte’ website te gaan.
                </p>
            </div>
        </div>
    </div>
</div>
<!--collapsible ------------------------------------------------<p class="centeredpar">---------------------------------->



<h2 class="rngh2">Hier volgt de website.</h2>
<div class="greeting">
<h3><?php echo greet();?></h3>
<p>Welkom op onze site, <a href="page_2.php">hier</a> kunt u ook bestellen</p>
</div>

<div class="centertext">
    <p class="generatedcode">

        Op de echte website kan de bezoeker naar een bestelpagina, een info-pagina en een
        contact-pagina.



    </p><br>

</div>

<!-- ----------------------------------------------------------------------FORM------------>






<!--collapsible ------------------------------------------------------------------>
<div class="wrap-collabsible">
    <input id="collapsible2" class="toggle" type="checkbox">
    <label for="collapsible2" class="lbl-toggle">Alle prijzen</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <table>
                <tr>
                    <th>Artikel</th>
                    <th>Eenheid</th>
                    <th>Prijs per eenheid</th>
                </tr>
                <?php
                foreach ($artikelen as $artikel) : ?>
                    <tr>
                        <td><?php echo $artikel['artikel']; ?></td>
                        <td><?php echo $artikel['eenheid']; ?></td>
                        <td>€ <?php echo number_format($artikel['prijs'], 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<!--collapsible ------------------------------------------------------------------->


<div class="center">
    <p>
        Dit is een huiswerkopdracht :
    <ul>
        <li>Een website</li>
        <li>HTML & CSS</li>
        <li>JavaScript</li>
        <li>PHP</li>
    </ul>
    </p>
</div>



<!--------------------------------------------------------------------------------------------infinite loading-->
<h1 class="generateloader">VIS BESTELLINGEN <br><span class="whitetext">AAN HET VERWERKEN</span></h1>
<div class="loading-box">
    <div class="loader"></div>
</div><br>







<!---------------------------------------------------------------------SCRIPTS -->
<script>
    let myLabels = document.querySelectorAll('.lbl-toggle');

    Array.from(myLabels).forEach(label => {
        label.addEventListener('keydown', e => {
            // 32 === spacebar
            // 13 === enter
            if (e.which === 32 || e.which === 13) {
                e.preventDefault();
                label.click();
            };
        });
    });
</script>

<!-- footer file -->
<?php require_once('includes/footer.php'); ?>