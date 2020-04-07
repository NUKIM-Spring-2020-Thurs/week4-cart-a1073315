<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>catalog.php</title>
<?php
session_start();

if(isset($_SESSION["login"])){

  $date = strtotime("+7 days",time());

  setcookie("ID",$_SESSION["ID"],$date);

}else{
  header('Location:login.php');
}



if ( isset($_POST["Item"]) ) {
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $pid = $_POST["Item"];
   $_SESSION["PID"] = $pid;

   switch ($pid) {
      case "1":
         $_SESSION["Name"] = "泡菜";
         $_SESSION["Price"] = 100;
         break;
      case "2":
         $_SESSION["Name"] = "關廟刀削麵";
         $_SESSION["Price"] = 200;
         break;
      case "3":
         $_SESSION["Name"] = "鐵蛋";
         $_SESSION["Price"] = 300;
         break;   
   }  
   header("Location: addcart.php");
}
?>
</head>
<body bgcolor="#CCCCFF" text="blue">
<form action="catalog.php" method="post">
選擇商品: 
<select name="Item">
  <option value="1">泡菜 - $100</option>
  <option value="2">關廟刀削麵 - $200</option>
  <option value="3">鐵蛋 - $300</option> 
</select>
<input type="number" min="1" name="Quantity" value="1"/>
<input type="submit" value="訂購"/>
</form>
<hr/>
| <a href="cart.php">檢視購物車</a> | <a href="login.php">登出</a>
</body>
</html>