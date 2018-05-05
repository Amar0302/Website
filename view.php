<?php
    require_once('globals.php');
    error_reporting(E_ALL & ~E_STRICT);
 
    $query = sprintf(
    	'SELECT items.itemId, items.userId, items.title, items.category, items.description, items.price, items.postage, '.
    	' images.imageId '.
    	' FROM iBayItems AS items '.
    	' LEFT JOIN iBayImages AS images ON items.itemId = images.itemId '.
    	' ORDER BY items.itemId '
    );
    $result = $db->query($query);
	if (PEAR::isError($result)){die($result->getMessage());}  
?>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link type= "text/css" rel = "stylesheet" href = "stylesheetlogin.css" />


        <title>iBay Uploaded Items</title>
    </head>
    <body>
	
	

	
	
	
	
	
	
	
	
	<?php
	include 'navigation.php';
	?>

	<center>
  <p><font size='10' color='green'>iBay</font>
  <font  size='5'> - <em>eBay's most recent lawsuit recipient</em></font></p>
  <hr/>
 
        <div>
            <h1>iBay Uploaded Items</h1>
 
 	<?php
	include 'get data.php';
	?>


            <ul>

            </ul>
<hr />
[ <a href="upload_html.php">Upload an item</a> ] [ <a href="view.php">View items</a> ]
 </center>
</body>
</html>