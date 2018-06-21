<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>

    
    <form method="post" action="upload.php" enctype="multipart/form-data">
    
        
        Upload Img : <input type="file" name="imgfile">
        
        
        <input type="submit" value="Upload Img" name="sbmt">
        
        
    
    </form>
    
    
    <table align="center" border="3">
    
    <tr>
    
        <td>
            Image Id    
        </td>    
        
        <td>
            Image Name
        </td>
        
        <td>
            Image Type
        </td>    
        
        <td>
            Image Size
        </td>
        
        <td>
            Img View
        </td>
        
        <td>
            Img Delete
        </td>
        
        <td>
            Img Update
        </td>
        
    
    </tr>
    <?php
            
         
    $con=mysql_connect("localhost","root","") or die(mysql_error());
    
    
    mysql_select_db("insert_db",$con);
    
    
    $select_query="SELECT * FROM `imgrecord`";

        $result=mysql_query($select_query);
        
        while($row=mysql_fetch_row($result))
        {
        ?>
        
        <tr>
            
            <td>
                <?php echo $row[0]; ?>
            </td>
        
            <td>
                <?php echo $row[1]; ?>
            </td>
            
            <td>
                <?php echo $row[2]; ?>
            </td>
            
            <td>
                <?php echo $row[3]; ?>
            </td>
            
            <td>
                <img src="upload/<?php echo $row[1]; ?>" width="50" height="50">
            </td>
            
            <td>
            
                <a href="delete.php?id=<?php echo $row[0]; ?>&data=<?php echo $row[1]; ?>">Delete Image <?php echo $row[1];?></a>
            </td>
            
            <td>
            
                <a href="update.php?id=<?php echo $row[0]; ?>">Update Image <?php echo $row[1];?></a>
            </td>
            
        </tr>
        
        
        <?php
            
        }
        
        
        ?>
        
    </table>
    
    


</body>
</html>