<?//$head=header("Location:index.php");?>
<html>
<head>
</head>
<body>
Hello!Enter password for access to chat!
<form action="main.php" method="post">
Password:<input type="text" name="pass">
<input type="submit" name="submit2" value="send">
</form>
<?
if(isset($_POST['submit2'])){
	$pass=$_POST['pass'];
	if ($_POST['pass']=="65afomip"){
		echo "Follow this link:<a href=index2.php>chat</a>";
	}
	else{
		echo "no!";
	}
}
?>
</body>
</html>
