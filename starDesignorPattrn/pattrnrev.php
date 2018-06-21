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
			for($i=1;$i<=$num;$i++)
			{
				for($b=1;$b<=$num-$i;$b++)
				{
					echo  " "." ";
				}
				for($j=1;$j<=$i;$j++)
				{
					echo " "."$j";
				}
				for($k=$i-1;$k>0;$k--)
				{
					echo " "."$k";
				}
				
			  echo "<br/>";
			}
		?>	