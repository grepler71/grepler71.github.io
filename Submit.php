<?php

require("vendor/autoload.php");

include("samplecode/paymenttransactions/authorize-credit-card.php");

function check_input($d_ata){
    $d_ata = trim($d_ata);
    $d_ata = stripslashes($d_ata);
    $d_ata = htmlspecialchars($d_ata);
    return $d_ata;
}


$ccnumber = check_input($_POST['ccnumber']);
$expdate = check_input($_POST['expdate']);
$cvvcode = check_input($_POST['cvvcode']);
$email = check_input($_POST['email']);
$fname = check_input($_POST['fname']);
$lname = check_input($_POST['lname']);
$addr1 = check_input($_POST['address1']);
$addr2 = check_input($_POST['address2']);
$city = check_input($_POST['city']);
$state = check_input($_POST['state']);
$zip = check_input($_POST['zip']);
$amount = check_input($_POST['amount']);

authorizeCreditCard($ccnumber,$expdate,$cvvcode,$fname,$lname,$addr1,$city,$state,$zip,$email,$amount);

?>