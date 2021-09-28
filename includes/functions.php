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

/**
* @return bool
*/
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

// Example
//if ( is_session_started() === FALSE ) session_start();
