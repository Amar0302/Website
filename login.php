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
	
	$row = mysql_fetch_array($query);

	if(!empty($row['name']) AND !empty($row['password']))
	{
		$_SESSION['name'] = $row['name'];
		$_SESSION['userid'] = $row['userid'];

		header("Location: home_page.php");
	

	}
	else
	{
		header("Location: login_html.php?incorrectLogin=true");
	exit;
		

	}
}
}
if(isset($_GET['login']))
{
	SignIn();
}


?>


