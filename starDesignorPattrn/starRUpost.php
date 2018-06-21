<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>star Design</title>
</head>
<body>
<form method="POST" action=" ">
    <center>
    <input type="text" name="ntxt"/>
    <input type="submit" name="sbmt" value="Enter"/><br/>
    </center><br/>
    <center>
    <?php
        $num=$_POST['ntxt'];
        
            for($i=0;$i<$num;$i++)
            {    
                for($j=$i;$j<$num;$j++)
        
                {
                    echo "$num"."&nbsp&nbsp&nbsp&nbsp";
                
                }
                
                
              echo "<br/>";
            }
        
    ?>
    </center>
    
    
    
</form>
</body>
</html>