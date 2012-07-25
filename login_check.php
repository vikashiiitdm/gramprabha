<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="echoupal"; // Database name 
$tbl_name="clients"; // Table name
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
print_r($_POST);
$cid=$_POST['username'];
$passwd=$_POST['password'];
if($cid || $passwd == null)
{header ('Location: login.php');}
$sql="SELECT passwd FROM `$db_name`.`$tbl_name` WHERE cid=`$cid`";
$result=mysql_query($sql);
if($result==$passwd)
{header ('Location:index.html');}
?>