<?php
	$evennum=$_POST['evenodd'];
	
	if(is_numeric($evennum)&&isset($evennum))
	{
		if(round($evennum,2)%2==0)
		{
			echo "the number" .$evennum. "entered is a even number<br>";
		}
		else
		{
			echo "the number".$evennum."is a odd number";
		}
	}	
	else
	{
		echo "please enter a numeric value";
	}
?>