<?php
/**
 * Delivery Form Data Processing
 */
 //requires

 require_once 'includes/functions.php';

//get vars with 'isset'
//button
//$_POST["checkout"];

if (isset($_POST["checkout"])) {
    //user
    $userName = Test_input($_POST["firstname"]);
    $userEmail = Test_input($_POST["email"]);
    $userAddress = Test_input($_POST["address"]);
    $userCity = Test_input($_POST["city"]);
    $userProvincie = Test_input($_POST["state"]);
    $userPostcode = Test_input($_POST["zip"]);

    //card data
    $cardName = Test_input($_POST["cardname"]);
    $cardNumber = Test_input($_POST["cardnumber"]);
    $expiryMonth = Test_input($_POST["expmonth"]);
    $expiryYear = Test_input($_POST["expyear"]);
    $cardValidationValue = Test_input($_POST["cvv"]);

    //checkboxes
    if (isset($_POST["sameadr"])) {
        $deliveryISuserAddress = $_POST["sameadr"];
    }

    if (isset($_POST["pickup"])) {
        $customerPickup = $_POST["pickup"];
    }
}
// gebruikers gegevens verwerken
/*
    $userName 
    $userEmail 
    $userAddress
    $userCity 
    $userProvincie 
    $userPostcode 

    //card data
    $cardName
    $cardNumber
    $expiryMonth
    $expiryYear
    $cardValidationValue

*/