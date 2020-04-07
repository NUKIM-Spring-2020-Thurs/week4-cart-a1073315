<?php
ob_start();
session_start();

$uid="a1073315";
$upwd="12345";

$iname=$_POST["name"];
$pwd=$_POST["pwd"];


if($uid==$iname && $upwd==$pwd)
{
    $_SESSION["login"]="S";
    $_SESSION["ID"]=$iname;
    header('Location:catalog.php');
}
else{
    $_SESSION["login"]="F";
    header('Location:catalog.php');
}
?>