<?php
require_once('globals.php');


$con=mysql_connect($hostname,$username,$password) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['userid'];
$Password = $_POST['password'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['userid']))   //checking the 'userid' which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM iBayMembers where userid = '$_POST[userid]' AND password = '$_POST[password]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['userid']) AND !empty($row['password']))
	{
		$_SESSION['userId'] = $row['password'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['login']))
{
	SignIn();
}

?>


Read more: http://mrbool.com/how-to-create-a-login-page-with-php-and-mysql/28656#ixzz5ELjM4Kky
