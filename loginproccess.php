<?php
require_once('globals.php');

/*
$ID = $_POST['userid'];
$Password = $_POST['password'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_GET['email']))   //checking the 'userid' which is from Sign-In.html, is it empty or have some text
{

	$query = mysql_query("SELECT *  FROM iBayMembers where email = '$_GET[email]' AND password = '$_GET[password]'") or die(mysql_error());
	
	$row = mysql_fetch_array($query) or die(mysql_error());
	
	if(!empty($row['email']) AND !empty($row['password']))
	{
		$_SESSION['userid'] = $row['password'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_GET['login']))
{
	SignIn();
}


?>


Read more: http://mrbool.com/how-to-create-a-login-page-with-php-and-mysql/28656#ixzz5ELjM4Kky
