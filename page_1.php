<!-- header file -->
<?php
$title = "Home"; //wederom titel op tabblad browser
require_once 'includes/header.php';  // header file (open <body>)
require_once 'includes/functions.php'; // laad de nodige php functies
require_once 'includes/productdata.php'; // laad de product informatie uit array
?>


<!--navigationn file plaatst de navigatiebalk-->
<?php require_once 'includes/navmenu.php' ?>
<!--navigationn file-->


<!-- een mmoie titel, dankzij SPAN tags met verschillende kleuren tekst binnen een element-->
<h1 class="rngcenter">Visboer <br><span class="whitetext">H.A. Ring</span></h1>

<!-- de inhoud van een uitvouw pijltje, we noemen het collapsible-->
<!--collapsible -->
<div class="wrap-collabsible"><!--DIV classes voor CSS -->
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
<!--collapsible-->


<h2 class="rngh2">Hier volgt de website.</h2>
<div class="greeting">
<h3><?php echo greet();?>(PHP function)</h3><!--open PHP tags en roep Functie aan -->
<p>Welkom op onze site, <a href="page_2.php">hier</a> kunt u ook bestellen</p> <!-- de link naar de webshop -->
</div>

<div class="centertext">
    <p class="generatedcode">

        Op de echte website kan de bezoeker naar een bestelpagina, een info-pagina en een
        contact-pagina.<br>
        <span id="greeting"></span><br><!-- hier zegt JS goedenmorgen / middag / avond -->

        begroeting op tijd basis via JS<br>
    Klik hierboven op "vis naar info voor Javascript functionaliteit".<br>
    Klik hieronder op "alle prijzen" om een php array te zien binnen een JS script.<br>
    Onderaan de pagina, VIS BESTELLINEGEN AAN HET VERWERKEN is 
    een proof of concept van CSS mogelijkheden
    </p>

</div>






<!--collapsible-->
<div class="wrap-collabsible">
    <input id="collapsible2" class="toggle" type="checkbox">
    <label for="collapsible2" class="lbl-toggle">Alle prijzen</label>
    <div class="collapsible-content">
        <div class="content-inner">
            <table class="prijstabel">
                <tr>
                    <th>Artikel</th>
                    <th>Eenheid</th>
                    <th>Prijs per eenheid</th>
                </tr>
                <?php
                foreach ($artikelen as $artikel) : ?> <!-- via php hoeven we niet zelf een hele tabel te schrijven-->
                <!-- verder is dit ook dynamisch, als ik een product invul op productdata zal deze hier automatisch verschijnen-->
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
<!--collapsible-->


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



<!--infinite loading-->
<h1 class="generateloader">VIS BESTELLINGEN <br><span class="whitetext">AAN HET VERWERKEN</span></h1>
<div class="loading-box">
    <div class="loader"></div>
</div><br>
<!-- de oneindige laad balk die maar doorloopt-->





<!--SCRIPTS van JavaScript -->
<script> //deze "luistert" of er op het uitvouwpijltje wordt geklikt
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

<script> // dit is de begroeting op basis van tijd
    var tijd = new Date().getHours();
    if (tijd < 12) {
    begroeting = "Goedemorgen";
    //code IF true
} else if (tijd < 18) {
    begroeting = "Goedemiddag";
    //code IF 1 false, en 2 true
} else {
    begroeting = "Goedeavond";
    // code if 1 == false && 2 == false
}
    document.getElementById("greeting").innerHTML = begroeting //de "plek" waar het in de HTML wordt gezet
</script>


<!-- footer file -->
<?php require_once 'includes/footer.php'; ?>
<!-- footer file -->
