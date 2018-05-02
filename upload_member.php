<?php
    require_once('globals.php');
    error_reporting(E_ALL);
	
	
    function assertValidUpload($code)
    {

         if ($code == UPLOAD_ERR_OK) {
            return;
        }
 
        switch ($code) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $msg = 'Image is too large';
                break;
 
            case UPLOAD_ERR_PARTIAL:
                $msg = 'Image was only partially uploaded';
                break;
 
            case UPLOAD_ERR_NO_FILE:
                $msg = 'No image was uploaded';
                break;
 
            case UPLOAD_ERR_NO_TMP_DIR:
                $msg = 'Upload folder not found';
                break;
 
            case UPLOAD_ERR_CANT_WRITE:
                $msg = 'Unable to write uploaded file';
                break;
 
            case UPLOAD_ERR_EXTENSION:
                $msg = 'Upload failed due to extension';
                break;
 
            default:
                $msg = 'Unknown error';
        }
 
        throw new Exception($msg);
    }
 
    $errors = array();
 
   
 
    if (count($errors) == 0) {
        // no errors, so insert the image
 
		$query = sprintf(
            "insert into iBayMembers (userid, password, name, email, address, postcode)
                values (%d, '%s', '%s', '%s', '%s', '%s')",
            '', 					// the itemId is auto increment 
            $_REQUEST['userid'],
            $_REQUEST['password'],
            $_REQUEST['name'],
            $_REQUEST['email'],
            $_REQUEST['address'],
            $_REQUEST['postcode']
        );
     	$result = $db->query($query);
		if (PEAR::isError($result)){die($result->getMessage());}  

        //$id = (int) mysql_insert_id($db);
 		$id = $db->lastInsertID(); //'iBayMembers', 'userid'
 		if (PEAR::isError($id)) {die($id->getMessage());}
 		
 		$query = sprintf(
            "insert into iBayImages (imageId, image, mimeType, imageSize, itemId )
                values (%d, '%s', '%s', %d, %d)",
            '',					// the imageId is auto increment
            addslashes(
                file_get_contents($image['tmp_name'])
            ),
			addslashes($info['mime']),
            $image['size'],
            $id					// the itemId from inserting the item is used in the images table to retrieve the asociated image(s)
        );
    	$result = $db->query($query);
		if (PEAR::isError($result)){die($result->getMessage());}  

        // finally, redirect the user to view the new image
        header("Location: view1.php?dbname=$dbname&itemId=" . $id);
        exit;
    }
?>
<html>
    <head>
        <title>iBay Register.php</title>
    </head>
    <body>
        <div>
            <p>
                iBay: The following errors occurred:
            </p>
 
            <ul>
                <?php foreach ($errors as $error) { ?>
                    <li>
                        <?php echo htmlSpecialChars($error) ?>
                    </li>
                <?php } ?>
            </ul>
 
            <p>
                <a href="upload_member.php">Try again</a>
            </p>
        </div>
    </body>
</html>