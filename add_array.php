<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>add_array</title>
</head>
<body>
    <?php 
        $a =array(10,20,30,40,50);
        $i=$sum=0;
        for($i=0;$i<5;$i++)
		{
            $sum=$sum+$a[$i];
			
		}
		 echo $sum; 
          
    ?>


</body>
</html>