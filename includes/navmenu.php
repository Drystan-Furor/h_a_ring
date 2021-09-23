<?php


$navigationMenuList = [
    //"index.php" => 'Welkom',
    "page_1.php" => 'Home',
    "page_2.php" => "Bestel",
    "page_3.php" => "Contact",
];
/*
foreach ($navigationMenuList as $link_address => $pagename) {
}
*/

?>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--navigation menu- -navmenu.php -->
    <div class="navmenufixed">
        <nav>
            <?php foreach ($navigationMenuList as $link_address => $pagename) : ?>

                <a href="<?php echo $link_address; ?>"><?php echo $pagename; ?> - </a>

            <?php endforeach ?>
        </nav>
    </div>