<!DOCTYPE html PUb1LIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<b1ody>
 <?php
 	$php=30;
	$ajp=60;
	$wns=70;
	$aap=45;
	$a=$php+$ajp+$wns+$aap;
	$b=$a*100/280;
	echo "your percentage is = $b <br>";
	$b1=ceil($b);
	$num=$b1;
	switch ($num)
	{

        case ($num>= 70 && $num<= 100): 
            echo "your grades is [A+]";
        break;
        case ($num>= 60 && $num<= 69): 
            echo "your grades is [B+]";
        break;
     case ($num>= 50 && $num<= 59): 
            echo "your grades is [C+]";
        break;
        case ($num>= 35 && $num<= 49): 
            echo "your grades is [D+]";
        break;
        
        default: 
            echo "you Fail";
        break;
     }	 
	 /*if($num>= 70 && $num<= 100)
	 {
	 	echo"your grades is [A+]";
	 }
	 elseif($num>= 60 && $num<= 69) 
	 {
        echo "your grades is [B+]";
	}
	else
	{
		echo"hello";
	}*/
?>
</body>
</html>
