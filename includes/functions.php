<?php

error_reporting(E_ALL);

/** 
  Time based greeting
 */
function greet()
{
    $hour = date("H");
    if ($hour >= 0 && $hour < 6) {
        $greet = "Goedenacht, ";
    } else if ($hour >= 6 && $hour < 12) {
        $greet = "Goedemorgen, ";
    } else if ($hour >= 12 && $hour < 18) {
        $greet = "Goede middag, ";
    } else if ($hour >= 18 && $hour < 24) {
        $greet = "Goede avond, ";
    } else {
        $greet = "Hallo, ";
    }

    return "$greet";
}

/**
 Create a function that will do all the checking for us
 */
function Test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}