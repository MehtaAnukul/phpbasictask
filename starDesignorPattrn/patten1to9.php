<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>

   <!-- <form action="#" method="post"> -->
       <!-- <input type="text" name="value" />
        <input type="submit" value="Submit"/><br/> -->
		
        <?php
           // $num=$_POST['value'];
            $a=1;
        	echo "traingle:-->"."<br/>";
			for($i=0;$i<4;$i++)
			{
				for($j=0;$j<$i+1;$j++)
				{
					echo  $a." ";
                    $a++;
				}
              echo "<br/>";
			}
        
        ?>
   <!-- </form> -->
    </body>
</html>