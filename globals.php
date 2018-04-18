<?php
	//initial setup of database - the PEAR way
	require_once('MDB2.php');

	//connect to the db

	$hostname = 'localhost';
	$dbname="group03";
	$username="group03";
	$password="CtIEfrSX34";
		
	$db=& MDB2::connect("mysql://$username:$password@$hostname/$dbname"); 
	if(PEAR::isError($db)){die($db->getMessage());}


	$db->Query("SET CHARACTER SET UTF8");
	$db->Query("SET NAMES UTF8");
	$db->setFetchMode(MDB2_FETCHMODE_ASSOC);

?>