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
 
    try {
        if (!array_key_exists('imagefile', $_FILES)) {
            throw new Exception('Image not found in uploaded data');
        }
 
        $image = $_FILES['imagefile'];
 
        // ensure the file was successfully uploaded
        assertValidUpload($image['error']);
 
        if (!is_uploaded_file($image['tmp_name'])) {
            throw new Exception('File is not an uploaded file');
        }
 
        $info = getImageSize($image['tmp_name']);
 
        if (!$info) {
            throw new Exception('File is not an image');
        }
    }
    catch (Exception $ex) {
        $errors[] = $ex->getMessage();
    }
 
 
		$query = sprintf(
            "insert into iBayMembers (userId, password, name, email, address, postcode)
                values (%d, '%s', '%s', '%s', '%s', '%s', '%s')",
            '', 					// the itemId is auto increment 
            $_REQUEST['userId'],
            $_REQUEST['password'],
            $_REQUEST['name'],
            $_REQUEST['email'],
            $_REQUEST['address'],
            $_REQUEST['postcode']
        );
     	$result = $db->query($query);
		if (PEAR::isError($result)){die($result->getMessage());}  

        //$id = (int) mysql_insert_id($db);
 		$id = $db->lastInsertID(); //'iBayItems', 'itemId'
 		if (PEAR::isError($id)) {die($id->getMessage());}
 		
 		
    	$result = $db->query($query);
		if (PEAR::isError($result)){die($result->getMessage());}  

        // finally, redirect the user to view the new image
        header("Location: view1.php?dbname=$dbname&itemId=" . $id);
        exit;
    
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