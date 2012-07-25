
<?php
$db=mysql_connect('localhost','root','')or die('error');
mysql_select_db('echoupal',$db)or die(mysql_error($db));
if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['passconf']))
{
echo " ALL ENTRIES ARE NOT FILLED <br>";
die();
}

$q="select username,password,passconf from user where username='$_POST[username]' and password='$_POST[password]' and passconf='$_POST[passconf]'";
$result=mysql_query($q,$db);
$row=mysql_fetch_assoc($result);
$name=$_POST['username'];
$pass=md5($_POST['password']);
$pass_conf=md5($_POST['passconf']);

if(empty($row))
{
$q="insert into user (username,password,passconf) values('$name','$pass','$pass_conf')";
echo " $_POST[username] ";
mysql_query($q,$db)or die(mysql_error($db));
echo"YOU HAVE SUCCESSFULLY REGISTERED<br>";
header('Refresh:0;URL=login.php?redirect='.$SERVER['PHP_SELF']);
}else echo "USER ALREADY EXIST";

?>