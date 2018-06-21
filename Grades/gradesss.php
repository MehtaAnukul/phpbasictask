<?php
		$PHP=92;
		$AJP=81;
		$WNS=55;
		$AAD=40;
		$a=$PHP+$AJP+$WNS+$AAD;
		$b=$a*100/280;
		echo "Your percentage is:$b <br>";
		$b1=ceil($b);
		$num=$b1;
		switch ($num)
		{

			case ($num>= 90 && $num<= 100): 
				echo "your grades is [AA]";
				break;
			case ($num>= 80 && $num<= 90): 
				echo "your grades is [AB]";
				break;
			case ($num>= 70  && $num<= 80 ): 
				echo "your grades is [BB]";
				break;
			case ($num>= 60 && $num<= 70): 
				echo "your grades is [BC]";
				break;
			case ($num>= 50 && $num<= 60): 
				echo "your grades is [CC]";
				break;
			case ($num>= 40 && $num<= 50): 
				echo "your grades is [DD]";
				break;
        
			default: 
				echo "you Fail";
				break;
		}	 
?>