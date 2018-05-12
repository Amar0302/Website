<?php
require_once('globals.php');

$urlParameters = array();
parse_str($_SERVER['QUERY_STRING'], $urlParameters);
$searchq = '';
if(!empty($urlParameters)) {
	$searchq = $urlParameters['search'];
}


$output = '';
if (!empty($urlParameters)) {
	$searchq = $urlParameters['search'];
	//$searchq = preg_replace(
	$query = mysql_query("SELECT * FROM iBayItems WHERE title LIKE '%$searchq%' OR category LIKE '%$searchq%' OR description LIKE '%$searchq%' ") or die ("couldnt search");
	$count = mysql_num_rows($query);
	echo $count;
	if ($count != 0 ) {
		while($row = mysql_fetch_array($query)) {
			$title = $row['title'];
			$category = $row['category'];
			$description = $row['description'];
			$output .= '<div> '.$title.' '.$category.' '.$description.' </div>';

		} 
	} else {

		$output = 'No results';
	}	 
}

?>


<html>
<head>
	<title> Search view </title>
	<link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />

</head>
<body>
<?php
	include 'navigation.php';
	echo $output;
	?>
</body>
</html>