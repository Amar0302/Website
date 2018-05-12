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

	if(!empty($row['name']) AND !empty($row['password']))
	{
		$_SESSION['name'] = $row['name'];
		echo "YAY WORKS";
		
		header("Location: home_page.php");
			exit;

	}
	else
	{
		header("Location: home_page.php");
			exit;
		/*echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";*/
	}
}
}
if(isset($_GET['login']))
{
	SignIn();
}


?>


