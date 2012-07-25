<?php
$db=mysql_connect("localhost","root","")or die("error");
mysql_select_db('my_db',$db)or die("error");
$name=$_POST['username'];
$pass=md5(($_POST['password']));
$query="select username,password from user where  username='$name' and password='$pass'";
$result=mysql_query($query,$db)or die(mysql_error($db));
 /*While($row=mysql_fetch_array($result)){
	 foreach($row as $values){
		 echo $value.' ';
		 }*/
		 //echo '</br>';
		 //}
$rowCheck = mysql_num_rows($result);
if($rowCheck>0)
					{
header('Refresh:1;URL=kamalkanth.php?redirect='.$SERVER['PHP_SELF']);
session_start();
$_SESSION['logged']=1;
}
else
{
echo "'error' username or password is wrong<br>";
header('Refresh:1;URL=login.php?redirect='.$SERVER['PHP_SELF']);
}
?>