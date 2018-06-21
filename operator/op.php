<html>
<head><title></title>
</head>
<body>
	<table border="1">
	<tr>
		<th>PHP Operator</th>
		<th>Operands</th>
		<th>Operator</th>
		<th>Ans</th>
	<tr>
	
	<tr>
		<td>Arithmetic Ope</td>
		<td>$a=1,$b=2</td>
		<td>$c=$a+$b</td>
		<td><?php $a=1;
				  $b=2;
				  $c=$a+$b;
				  echo $c;
			?>
		</td>
	</tr>
	
	<tr>
		<td>Assignment ope</td>
		<td>$a=5</td>
		<td>$b=$a</td>
		<td><?php $a=5;
				  $b=$a;
				  echo $b;
			?>
		</td> 
	</tr>
	
	<tr>
		<td></td>
		<td>$a=5</td>
		<td>$a+=5</td>
		<td><?php $a=5;
				  $a+=5;
				  echo $a;
			?>
		</td> 
	</tr>
	
	<tr>
		<td>Increment ope</td>
		<td>$a=5</td>
		<td>$a++</td>
		<td><?php $a=5;
				  $a++;
				  echo $a;
			?>
		</td> 
	</tr>
	
	<tr>
		<td>Decrement ope</td>
		<td>$a=5</td>
		<td>$a--</td>
		<td><?php $a=5;
				  $a--;
				  echo $a;
			?>
		</td> 
	</tr>
	
	<tr>
		<td>Ternary ope</td>
		<td>$a=10,$b=20</td>
		<td>$max=($a>$b)?$a:$b;</td>
		<td><?php $a=5;$b=20;
				  $max=($a>$b)?$a:$b;
				  echo $max;
			?>
		</td> 
	</tr>
	
	<tr>
		<td>String Concatanation ope</td>
		<td>$a="Welcome",$b="Anukul"</td>
		<td>$c=$a.$b</td>
		<td><?php $a="Welcome";
				  $b="Anukul";
				  $c=$a.$b;
				  echo $c;
			?>
		</td> 
	</tr>
	
	<tr>
		<td>Comparison ope</td>
		<td>$a=5,$b=8</td>
		<td>$a==$b</td>
		<td><?php $a=5;
			      $b=8;
				  if($a==$b)
				  {
					echo "true";
				  }
				  else
				  {
					echo "false";
				   }
			?>
		</td>
	</tr>	
	
	<tr>
		<td></td>
		<td>$a=5,$b=8</td>
		<td>$a!=$b</td>
		<td><?php $a=5;
			      $b=8;
				  if($a!=$b)
				  {
					echo "true";
				  }
				  else
				  {
					echo "false";
				   }
			?>
		</td>
	</tr>

	<tr>
		<td></td>
		<td>$a=5,$b=8</td>
		<td>$a===$b</td>
		<td><?php $a=5;
			      $b=8;
				  if($a===$b)
				  {
					echo "true";
				  }
				  else
				  {
					echo "false";
				   }
			?>
		</td>
	</tr>
	
	
	<tr>
		<td></td>
		<td>$a=5,$b=8</td>
		<td>$a<=$b</td>
		<td><?php $a=5;
			      $b=8;
				  if($a<=$b)
				  {
					echo "true";
				  }
				  else
				  {
					echo "false";
				   }
			?>
		</td>
	</tr>
		
	<tr>
		<td></td>
		<td>$a=5,$b=8</td>
		<td>$a>=$b</td>
		<td><?php $a=5;
			      $b=8;
				  if($a>=$b)
				  {
					echo "true";
				  }
				  else
				  {
					echo "false";
				   }
			?>
		</td>
	</tr>
			
		
	
				
				  
</table>
</body>
</html>		