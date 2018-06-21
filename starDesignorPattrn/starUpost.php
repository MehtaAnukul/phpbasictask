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
                for($j=0;$j<$i+1;$j++)
        
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