<?php
session_start();

if ( isset($_SESSION["PID"]) ) {
   $pid = $_SESSION["PID"]; 
   $pname = $_SESSION["Name"];
   $price = $_SESSION["Price"];
   $quantity = $_SESSION["Quantity"];   

   setcookie($pid."[Name]", $pname, time()+3600);
   setcookie($pid."[Price]", $price, time()+3600);
   setcookie($pid."[Quantity]", $quantity, time()+3600);
}
header("Location:catalog.php");
?>