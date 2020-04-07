<?php
$pid = $_GET["Id"];
if ( isset($_COOKIE[$pid]) ) {
   while ( list($pname, $value) = each($_COOKIE[$pid]) )
      setcookie($pid."[".$pname."]", "", time()-3600); 
}
header("Location:cart.php");
?>