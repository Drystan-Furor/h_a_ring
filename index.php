<?php
/** 
 * @category Huiswerk, 9 - 2021
 * @author   "Tristan Arts <ArtsTristan@gmail.com>"
 */

require_once 'includes/functions.php'; // PHP functions file
if (is_session_started() === false ) { // start een sessie tenzij een sessie al loopt.
    session_start();
}
?>

<!-- header file -->
<?php
$title = "H.A. Ring Index"; //de titel op je tablad in de browser via php
require_once 'includes/header.php'; // plaats hier de header file
?>
<!-- header file -->

<!-- hier is de afbeelding van de landings pagina -->
<a href="page_1.php"><img src="img/haring.jpg" alt="een vis" class="visfoto"> </a>
<!-- op klik haan we naar page_1 -->

<!-- footer file -->
<?php
require_once 'includes/footer.php'; //afsluiten met footer file
?>
<!-- footer file -->
