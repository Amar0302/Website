<?php
    require_once('globals.php');
    error_reporting(E_ALL & ~E_STRICT);
 
    $query = sprintf(
    	'SELECT items.itemId, items.userId, items.title, items.category, items.description, items.price, items.postage, '.
    	' images.imageId '.
    	' FROM iBayItems AS items '.
    	' LEFT JOIN iBayImages AS images ON items.itemId = images.itemId '.
    	' ORDER BY items.itemId ');

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
        
        $regex = '.*';
        $freepostagecond = 'true';
        $pricemorethan = 0;
        $pricelessthan = 10000000000000;
        $category = '';
        $searchq = '';
        $orderBy = 'itemId';
        
        if(isset($_GET["freepostage"])) {
            $freepostage = $_GET['freepostage'];
            if($freepostage == "yes") {
                $freepostagecond = 'postage = 0';
            } else {
                $freepostagecond = 'postage > 0';
            }
        }
        if(isset($_GET["regex"])) {
            $regex = $_GET['regex'];
        }
        if(isset($_GET["pricemorethan"])) {
            $pricemorethan = $_GET['pricemorethan'];
        }
        if(isset($_GET["pricelessthan"])) {
            $pricelessthan = $_GET['pricelessthan'];
        }
        if(isset($_GET["category"])) {
            $category = $_GET['category'];
        }
        if(isset($_GET["search"])) {
            $searchq = $_GET['search'];
        }
        if(isset($_GET["orderBy"])) {
            $orderBy = $_GET['orderBy'];
        }

       $sql = "SELECT * FROM iBayItems WHERE (title like '%$searchq%' OR category LIKE '%$searchq%'  OR description LIKE '%$searchq%') AND (category LIKE '%$category%') AND (price < $pricelessthan) AND (price > $pricemorethan) AND ($freepostagecond) AND (title RLIKE '$regex' OR category RLIKE '$regex'  OR description RLIKE '$regex') ORDER BY $orderBy";

	   include 'get data.php';
	?>


            <ul>

            </ul>
<hr />
[ <a href="upload_html.php">Upload an item</a> ] [ <a href="view.php">View items</a> ]
 </center>
</body>
</html>