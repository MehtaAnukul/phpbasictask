<?php
	echo "gettype:--><br>";
		$a=2;
		$b=4.5;
		$c="Anu";
		$d=true;
		echo gettype($a)."<br>";
		echo gettype($b)."<br>";
		echo gettype($c)."<br>";
		echo gettype($d)."<br><br>";
	
	echo "settype:--><br>";
		$b;
		settype($b,"integer");
		echo gettype($b)."<br>";
		echo $b."<br><br>";
		
	echo "isset:--><br>";
		$a=5;
		if(isset($a))
		{
			echo "variable is assigned value<br><br>";
		}
		else
		{
			echo "variable is not assigned value";
		}	
		
	echo "unset:--><br>";
		$a=5;
		echo $a;
		unset($a);
		echo $a."<br>";
		
	echo "strval:--><br>";
		$a=23;
		$b=25.35;
		$c="Anu";
		$d=false;
		$a=strval($a);
		$b=strval($b);
		$c=strval($c);
		$d=strval($d);
		echo gettype($a)."<br>";
		echo gettype($b)."<br>";
		echo gettype($c)."<br>";
		echo gettype($d)."<br><br>";
		
	echo "floatval:--><br>";
		$a=23.78;
		$b=25.35;
		$c="67.12Anu";
		$d="anu45.12";
		$e="anu";
		echo floatval($a)."<br>";
		echo floatval($b)."<br>";
		echo floatval($c)."<br>";
		echo floatval($d)."<br>";
		echo floatval($e)."<br><br>";
		
	echo "intval:--><br>";
		$a=23.78;
		$b=25.35;
		$c="67.12Anu";
		$d="anu45.12";
		$e="anu";
		echo intval($a)."<br>";
		echo intval($b)."<br>";
		echo intval($c)."<br>";
		echo intval($d)."<br>";
		echo intval($e)."<br><br>";
		
	echo "print_r:--><br>";
		$a=array("anu","bapu","titu");
		print_r($a) ;
		
	
?>