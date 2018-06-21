<?php
	
	$a=array(10,44,100,70,45,5,4,96);
	for($i=0;$i<8;$i++)
	{
		for($j=$i+1;$j<8;$j++)
        {
			if($a[$i]>$a[$j])
			{
				$temp=$a[$i];
				$a[$i]=$a[$j];
				$a[$j]=$temp;
			}
        }
		
	}
 print_r($a);
?>