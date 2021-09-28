<?php
/** 
 * @category Huiswerk, 9 - 2021
 * @author   "Tristan Arts <ArtsTristan@gmail.com>"
 
require_once 'includes/functions.php';  // PHP functions file
require_once 'includes/db_connect.php'; // Database connection file
 */
require_once 'includes/functions.php';
if (is_session_started() === false ) {
    session_start();
}

?>

<!-- header file -->
<?php
$title = "H.A. Ring Index";
require_once 'includes/header.php';
?>



<a href="page_1.php"><img src="img/haring.jpg" alt="een vis" class="visfoto"> </a>

<?php
require_once 'includes/footer.php';
?>