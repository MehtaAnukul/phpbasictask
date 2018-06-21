<?php
	
	function ab()
	{
		$fact=5;
		echo "factorial of $fact is:"."<br>";
		for($i=1;$i<5;$i++)
		{
			$fact=$fact*$i;
			 /*echo "the ans:".$fact."</br>";*/
			 
		}
		echo "the ans:-->".$fact;
	}
	echo ab();
?>