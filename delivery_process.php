<?php
/**
 * Delivery Form Data Processing
 */
 //requires



//get vars with 'isset'
//button
//$_POST["checkout"];

if (isset($_POST["checkout"])) {
    //user
    $userName = $_POST["firstname"];
    $userEmail = $_POST["email"];
    $userAddress = $_POST["address"];
    $userCity = $_POST["city"];
    $userProvincie = $_POST["state"];
    $userPostcode = $_POST["zip"];

    //card data
    $cardName = $_POST["cardname"];
    $cardNumber = $_POST["cardnumber"];
    $expiryMonth = $_POST["expmonth"];
    $expiryYear = $_POST["expyear"];
    $cardValidationValue = $_POST["cvv"];

    //checkboxes
    if (isset($_POST["sameadr"])) {
        $deliveryISuserAddress = $_POST["sameadr"];
    }

    if (isset($_POST["pickup"])) {
        $customerPickup = $_POST["pickup"];
    }
}

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