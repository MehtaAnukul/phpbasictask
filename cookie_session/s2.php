<?php
	session_start();
	
	$name=$_POST['uname'];
	$pass=$_POST['pwd'];
	
	if($name=="anukul" and $pass=="aaff")
	{
		$_SESSION['uname']=$name;
		header("location:s3.php");
	}
	else
	{
		echo "Wrong uname or password";
	}
?>
	
	