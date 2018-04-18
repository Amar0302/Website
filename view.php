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
        <title>iBay Uploaded Items</title>
    </head>
    <body>
        <div>
            <h1>iBay Uploaded Items</h1>
 
 

            <ul>
<?php
	if ($result->numRows() == 0) { 
		echo "<li>No uploaded images found</li>";
	} else while ($row = $result->fetchRow()) { 
		echo "<li>";
		echo "<img src='file.php?imageId={$row[strtolower('imageId')]}' />";
		echo "{$row[strtolower('itemId')]}, {$row[strtolower('userId')]}, {$row['title']}, {$row['category']}, {$row['description']}, {$row['price']}, {$row['postage']}, {$row[strtolower('imageId')]}";
		echo "</li>";
	}
?>
            </ul>
<hr />
[ <a href="upload.html">Upload an item</a> ] [ <a href="view.php">View items</a> ]
</body>
</html>