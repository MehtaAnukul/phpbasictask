
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>
<center>
    <form action="#" method="post">
        <input type="text" name="value" />
        <input type="submit" value="Submit"/><br/>
		
        <?php
            $num=$_POST['value'];
                 
		echo "reverse traingle:-->"."<br/>";
			for($i=0;$i<$num;$i++)
			{
				for($j=$i;$j<$num;$j++)
				{
					echo  "$num"." ";
				}
			  echo "<br/>";
			}
			
		echo "traingle:-->"."<br/>";
			for($i=0;$i<$num;$i++)
			{
				for($j=0;$j<$i+1;$j++)
				{
					echo  "$num"." ";
				}
              echo "<br/>";
			}
        
        echo "prime traingle:-->"."<br/>";
        for($i=0;$i<$num;$i++)
        {
            for($j=0;$j<$i+1;$j++)
            {
                echo  "$num"." ";
            }
          echo "<br/>";
        }
    
    ?>

</form>
    </center>
</body>
</html>