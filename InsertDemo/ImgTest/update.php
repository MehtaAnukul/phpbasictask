<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>

<body>



    <?php

    $con=mysql_connect("localhost","root","") or die(mysql_error());
    
    
    mysql_select_db("insert_db",$con);


    $img_id=$_GET['id'];


    $query_update="UPDATE `imgrecord` SET `img_name`='myimg' WHERE `img_id`='$img_id'";
    
    
    mysql_query($query_update);
    
    
    
    

?>




</body>

</html>