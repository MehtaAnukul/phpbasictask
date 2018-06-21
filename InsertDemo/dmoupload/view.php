<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>img upload</title>
</head>

<body>


    <table cellpadding="10" border="2">

        <tr>

            <td> Id</td>
            <td> Name</td>
            <td> Type</td>
            <td> size</td>
            <td>Img</td>
        </tr>


        <?php
    
    mysql_connect("localhost","root","");
        mysql_select_db("insert_db");
     
    
    $select_query="SELECT * FROM `img`";
    
    $result=mysql_query($select_query);
    
    
    while($row=mysql_fetch_row($result))
    {
        
        ?>
            <tr>
                <td>
                    <?php echo $row[0]?>
                </td>
                <td>
                    <?php echo $row[1]?>
                </td>
                <td>
                    <?php echo $row[2]?>
                </td>
                <td>
                    <?php echo $row[3]?>
                </td>
                
                <td>
                    <img src="img/<?php echo $row[1]; ?>" width="100" height="100">
                </td>
            </tr>
            <?php
    }
    
    ?>
    </table>
<a href="index.html">Goto Home</a>

</body>

</html>