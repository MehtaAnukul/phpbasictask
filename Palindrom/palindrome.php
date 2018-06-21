<?php
	$num=$_GET['txt'];
	$p=$num;
	
	while((int)$num!=0)
	{
		$rem = $num % 10;
		$sum = $sum *10 + $rem;
		$num = $num / 10;
	}
	if($sum==$p)
	{
		echo $p." "."is Palindrome number ";
	}
	else
	{
		echo $p." "."is not Palindrome number";
	}
	
?>
