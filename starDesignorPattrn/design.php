<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="value" />
        <input type="submit" value="Submit"/><br/>
        <?php
            $v=$_POST['value'];
            
        
               ?>
    <?php
    echo "reverse traingle:-". "<br/>";
        for($i=0;$i<$v;$i++)
        {
            for($j=$i;$j<$v;$j++)
            {
                echo  "$v" . " ";
            }
            echo "<br/>";
        }
     echo " traingle:-". "<br/>";
//                    echo $v;
        
        for($i=0;$i<$v;$i++)
        {
            
           /* for($sp=$i;$sp<$v-1;$sp++)
            {
                echo "*";    
            }*/
            
            for($j=0;$j<$i+1;$j++)
            {
                echo  "$v" . " ";
            }
            echo "<br/>";
        }
        
        echo "prime traingle:-". "<br/>";
        for($i=0;$i<$v;$i++)
        {
            for($j=0;$j<$i+1;$j++)
            {
                echo  "$v" . " ";
            }
            echo "<br/>";
        }
    
    ?>

</form>
</body>
</html>