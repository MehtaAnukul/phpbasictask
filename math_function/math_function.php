<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$a=5;
	$b=2;
	echo abs(-1.5)."<br>";
	echo pow(2,4)."<br>";
	echo ceil(-1.6)."<br>";
	echo floor(-1.6)."<br>";
	echo round(3.35)."<br>";
	echo fmod($a,$b)."<br>";
	$c=max($a,$b);
	echo $c."<br>";
	echo sqrt(64)."<br>";
?>
</body>
</html>
