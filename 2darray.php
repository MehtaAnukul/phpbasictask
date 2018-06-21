<?php
    $array = array(
                    array(10,20,30),
                    array(40,50,60),
                    array(70,80,90)
                   );
      for($i=0;$i<3;$i++)  
      {
            for($j=0;$j<3;$j++)
            {
                echo " ".$array[$i][$j];
                
            } 
          echo "<br/><br/>";
      }
                   
      $psum=0;
	  for($i=0,$j=0; $i<3 && $j<3; $i++,$j++)
	  {
		$psum=$psum+$array[$i][$j];
		
	  }	
      echo "Sum of Primary Diagonal:-->".$psum;
	  
	  echo "<br/><br/>";
	  
	  
      $rsum=0;
	   for($i=2,$j=0; $i>=0 && $j<3; $i--,$j++)
	   {
			$rsum=$rsum+$array[$i][$j];
        }           
        echo "Sum of Secondary Diagonal:-->" . $rsum . "<br/><br/>"; 

		for($i=0;$i<5;$i++)
		{
			for($j=0;$j<5;$j++)
			{
				if($i==$j)
				{
					echo "*"."&nbsp";
				}
				else
				{
					echo "&nbsp"."&nbsp"."&nbsp";
				}
			}
			echo "<br/><br/>";
		}	
			
                   
                   
?>                   