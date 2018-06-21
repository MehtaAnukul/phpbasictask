<?php

	$Grade="c";
	switch($Grade)
	{
		case "A":
			echo "Excellent";
			break;
		case "B":	
		case "c":
			echo "Well done";
			break;
		case "D":
			echo "You passed";
			break;
		case "F":
			echo "Better try again";
			break;
		default:
			echo "Invalid grade";
	}
	echo "Your grade is:-->"." ".$Grade."</br>";
		
?>