<?php
	function swap($a,$b)
	{
		$c=$a;
		$a=$b;
		$b=$c;
		echo "After swap <br/>";
		echo "A=".$a."<br/>";
		echo "B=".$b."<br/>";
	}
	$a=2;
	$b=3;
		echo "Before swap <br/>";
		echo "A=".$a."<br/>";
		echo "B=".$b."<br/>";
	swap($a,$b);
	
?>