<?php
	session_start();
?>
<form action="s4.php" method="POST">
<?php	
		if( isset($_SESSION['uname']) )
		{
			echo "Welcome"." ".$_SESSION['uname'];
		?>
		<input type="submit" name="submit" value="logout"/>
		<?php
		}
		else
		{
			echo "invalid session";
		//	header("location:s1.php");
		}
?>
</form>		