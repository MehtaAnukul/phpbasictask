<!doctype html>
<html>

<head>


    <?php
    

    $con=mysql_connect("localhost","root","") or die("Connection Error");
    
    mysql_select_db("upload_db",$con);
    
    
    
    
        
    
    ?>

        <meta charset="UTF-8">
        <title>Untitled Document</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
            $(function () {
                $("#dialog-message").dialog({
                    modal: true
                    , buttons: {
                        Ok: function () {
                            $(this).dialog("close");
                        }
                    }
                });
            });
        </script>
</head>

<body>
    <?php
header('charset=utf-8');
try {   
    // Undefined | Multiple Files | $_FILES Corruption Attack
    // If this request falls under any of them, treat it invalid.
    if (!isset($_FILES['upfile']['error']) || is_array($_FILES['upfile']['error'])    )
    {
        throw new RuntimeException('');
    }

    // Check $_FILES['upfile']['error'] value.
    switch ($_FILES['upfile']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    // You should also check filesize here. 
    if ($_FILES['upfile']['size'] > 1572864) {
        throw new RuntimeException('Exceeded filesize limit.');
    }

    // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
    // Check MIME Type by yourself.
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    
    if (false === $ext = array_search($finfo->file($_FILES['upfile']['tmp_name']),array('jpg' => 'image/jpeg','png' => 'image/png',
        ),
        true
    )) {
        throw new RuntimeException('Invalid file format.');
    }

    
    
  /*  // Check if file already exists
    
    $target_file = $folder . basename($_FILES["upfile"]["name"]);
$uploadOk = 1;
    
    
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/
    
    // You should name it uniquely.
    // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
    // On this example, obtain safe unique name from its binary data.
    
    if (!move_uploaded_file($_FILES['upfile']['tmp_name'],sprintf('./uploads/%s.%s',sha1_file($_FILES['upfile']['tmp_name']), $ext ))) 
    {
        throw new RuntimeException('Failed to move uploaded file.');
    }
    else
    {
        $file_name=$_FILES['upfile']['name'];
        $file_type=$_FILES['upfile']['type'];
        $file_size=$_FILES['upfile']['size'];
        
        
        
        $data_insert_query="INSERT INTO `img_data`(`img_id`, `img_name`, `img_type`, `img_size`) VALUES ('','$file_name','$file_type','$file_size')";
        
        
        if(mysql_query($data_insert_query))
        {
            ?>

        <script type="application/javascript">
            alert("Data Successfully inserted");
        </script>

        <?php 
        } 
    } /*echo '
        <script language="javascript">
            ';
            echo 'alert("File Succesfully Uploaded")';
            echo '
        </script>';*/ ?>
            <div id="dialog-message" title="upload complete">
                <p>
                    <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span> Your files have successfully uploaded into the uploads/ folder.
                </p>

            </div>
            <?php
} catch (RuntimeException $e) {

    echo $e->getMessage();

}
?>
</body>

</html>