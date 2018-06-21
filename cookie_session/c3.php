<form action="c4.php" mathod="POST">
<?php
	if( isset($_COOKIE['uname']) and isset($_COOKIE['pwd']) )
	{
		echo "Welcome"." ".$_COOKIE['uname'];
		?>
		<input type="submit" name="submit" value="logout"/>
		<?php
	}
	else
	{
		echo "invalid cookies";
		//header("location:c1.php");
	}	
?>
</form>