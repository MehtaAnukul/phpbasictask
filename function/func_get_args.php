<?php
	echo "sum is :-->";
	function sum()
	{
		$result=0;
		$arguments=func_get_args();
		foreach($arguments as $value)
		{
			$result += $value;
		}
		echo $result;
	}
	sum(1,2,3,4,5);
	
?>