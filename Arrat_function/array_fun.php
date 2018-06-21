<?php
	echo "count Function:--><br>";
		$myarray=array("a","b","c");
		echo count($myarray)."<br/><br/>";
	
	echo "list Function:--><br>";
		$myarray=array("anu","bapu","titu");
		list($name,$name1,$name2)=$myarray;
		echo $name."<br/>";
		echo $name1."<br/>";
		echo $name2. "</br></br>";
		
	echo "in_array:--><br>";
		$myarray=array("anu","bapu","titu");
		if( in_array("Titu",$myarray) )
		{
			echo "string Found in array <br/>";
		}
		else
		{
			echo "string not Found in array <br/>";
		}

		$myarray1=array(12,22,33);
		if( in_array("12",$myarray1,true) )
		{
			echo "string Found in array <br/>";
		}
		else
		{
			echo "string not Found in array <br/>";
		}
		
		$myarray1=array(12,22,33);
		if( in_array("12",$myarray1,false) )
		{
			echo "string Found in array <br/><br/>";
		}
		else
		{
			echo "string not Found in array <br/>";
		}
		
	$myarray=array("anu","bapu","titu");
	echo "current Function:-->".current($myarray)."<br>";
	echo "next Function:-->".next($myarray)."<br>";
	echo "prev Function:-->".prev($myarray)."<br>";
	echo "end Function:-->".end($myarray)."<br><br>";
	
	echo "array_merge Function:--><br>";
		$batsman=array("anu","bapu","titu");
		$bowler=array("subh","K.R","D.V");
		$team=array_merge($batsman,$bowler);
		print_r($team);
		echo "<br><br>";
	
	echo "each Function:--><br>";
		print_r(each($batsman));
		echo "<br>";
		print_r(each($batsman));
		echo "<br>";
		print_r(each($batsman));
		echo "<br><br>";
		
	echo "sort Function:--><br>";
		$sd=array("c","b","a");
		sort($sd);
		print_r($sd);
		echo "<br><br>";
		
	echo "array_reverse:--><br>";
		$name=array("anu","bapu","titu");
		print_r($name);
		echo "<br>";
		$name1=array_reverse($name);
		print_r($name1)."</br>";
		echo "<br>";
		$name2=array_reverse($name,true);
		print_r($name2);
		
	
	
		
?>