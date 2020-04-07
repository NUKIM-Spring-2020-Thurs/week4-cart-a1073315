<center>
<h2>呷飽set chu登入頁面</h2></br>
<body bgcolor="#FFFF96">
<?php
if(isset($_COOKIE["ID"])){
    $user=$_COOKIE["ID"];
    echo $_COOKIE["ID"],",歡迎您再度光臨";
    setcookie("ID","",time()-3600);
}
else{
    echo " 歡迎新朋友 ";
    $user="";
}
?>
<form action="check.php" method="post">
	<br/>
    請輸入使用者名稱:<input type="text" name="name" value='<?php echo $_COOKIE['ID'];?>'required><br/>
    請輸入使用者密碼:<input type="password" name="pwd" required><br/>
    <br/>
    <input type="submit">
</form>
</body>
</center>