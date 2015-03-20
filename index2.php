<html>
<head>
<title>Chat!</title>
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
Choose background of your page!
<button id="1">blue</button>
<button id="2">green</button>
<button id="3">red</button><br>
<script type="text/javascript">
$("#1").click(function(){
$("html").css("background-color","blue");
});
$("#2").click(function(){
$("html").css("background-color","green");
});
$("#3").click(function(){
$("html").css("background-color","red");
});
</script>
Welcome to our Chat!If want to be anonymous,this chat for you!
<h2>Chat:</h2>
<?
if(isset($_POST['submit2'])){
$login=$_POST['login'];
$log=":";
$str="<br>";
$mess=$_POST['mess'];
$fp=fopen("message.txt","a");
fwrite($fp,$login);
fwrite($fp,$log);
fwrite($fp,$mess);
fwrite($fp,$str);
fclose($fp);
}
?>
<style>
.mess{
	border:5px solid blue;
	width:150px;
	overflow:true;
}
</style>
<?
$fop2=fopen("message.txt","r");
$txt=fread($fop2,20000);
fclose($fop2);
?>
<div class="mess">
<?
echo $txt;
?>
</div>
</div>
<form action="index2.php" method="post">
login:<input type="text" name="login">
Text:<br><textarea name="mess" rows="10" cols="50"> </textarea><br>
<input type="submit" name="submit2" value="send">
</form>
<body>
</html>
