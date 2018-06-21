<?php
	$r=3;
	function area($r,$PI=3.14)
	{
		$a=$PI*$r*$r;
		return $a;
	}
	echo "Area of circle with $r is:-->".area($r);
?> 