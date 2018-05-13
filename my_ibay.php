<?php
require_once('globals.php');

?>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />


        <title>My iBay Uploaded Items</title>
    </head>
    <body>

	<?php
	include 'navigation.php';
	?>

	<center>
  <p><font size='10' color='green'>My iBay</font>

  	<?php
        $useridq = '';
        if(isset($_SESSION["userid"])) {
            $useridq = $_SESSION['userid'];
        }
      

       $sql = "SELECT * FROM iBayItems WHERE userId = $useridq";

	   include 'get data.php';
	?>
  
