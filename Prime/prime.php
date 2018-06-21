<?php
	$num=$_POST['txt'];
	if($_POST['sbmt']=="check")
	{
		for($i=2;$i<=$num-1;$i++)
		{
			if($num%$i==0)
			{
				$value=True;
			}
		}
		if($value)
		{
			echo "the number"." ".$num." "."is a composite";
		}
		else
		{
			echo "the number"." " .$num." ". "is a prime";
		}
	}

?>