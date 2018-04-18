<?php
    require_once('globals.php');
 
    try {
        if (!isset($_REQUEST['imageId'])) {
            throw new Exception('ID not specified');
        }
 
        $id =  $_REQUEST['imageId'];
  
        $query  = sprintf('select * from iBayImages where imageId = %d', $id);
        $result = $db->query($query);
 
        if ($result->numRows() == 0) {
            throw new Exception('Image with specified ID not found');
        }
 
        $image = $result->fetchRow();
    }
    catch (Exception $ex) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
 
    header('Content-type: ' . $image[strtolower('mimeType')]);
    header('Content-length: ' . $image[strtolower('imageSize')]);
 
    echo $image['image'];
?>