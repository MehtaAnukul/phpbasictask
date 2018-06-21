<?php
	$name=$_POST['uname'];
	$pass=$_POST['pwd'];
	
	if($name=="Anukul" and $pass="aaff")
	{
		$et=10+time();
		setcookie('uname',$name,$et);
		setcookie('pwd',$pass);
		header("location:c3.php");
	}
	else
	{
		echo "wrong username and password";
	}
	
?>