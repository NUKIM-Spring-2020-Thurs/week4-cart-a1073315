<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>cart.php</title>
<?php
session_start();

if(isset($_SESSION["login"])){

  $date = strtotime("+7 days",time());

  setcookie("ID",$_SESSION["ID"],$date);

}else{
  header('Location:login.php');
}
?>

</head>
<body bgcolor=" #B8B8FF" text="#000085">
<table border="0">
  <tr bgcolor="#FFFF3B">
   <td>功能</td><td>名稱</td>
   <td>價格</td><td>數量</td></tr>

<?php
$flag = false;  $total = 0;

while ( list($arr, $value) = each($_COOKIE) ) {
  if ( isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]) ) {

     $color="#FFFFC9";

     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='delete.php?Id=".$arr."'>";
     echo "刪除</a></td>";

     $price = 0;
     $quantity = 0;
     
     while ( list($pname, $value)=each($_COOKIE[$arr])) {
    
        echo "<td>" . $value . "</td>";
        if ($pname == "Price")  $price = $value;
        if ($pname == "Quantity") $quantity = $value;
     }
     $total += $price * $quantity;
     echo "</tr>";
  }
}
if ($total != 0) {
   echo "<tr bgcolor=white><td colspan=4 align=right>";
   echo "總金額 = NT$".$total."元</td></tr>";
}
?>
</table>
<hr/> | <a href="catalog.php">商品目錄</a>
 |<a href="login.php">登出</a>
</body>
</html>