<?php
		if(!isset($_POST['txtNumber']))
		{
			$message="Welcome to PHP";
		
		}
		elseif(!is_numeric($_POST['txtNumber']))
		{
			$message="please Enter Numeric Value";
		}
		elseif($_POST['txtNumber']>0)
		{
			$message="Number is Positive";
		}
		elseif($_POST['txtNumber']<0)
		{
			$message="Number is Negative";
		}
		elseif($_POST['txtNumber']==0)
		{
			$message="Number is Zero";
		}
		else
		{
			$message="Wrong Input";
		}
?>		
		
<html>
<head>
<title>Combining HTML and PHP</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	Enter Number:<br/>
	<input type="text" name="txtNumber"/>
	<input type="submit" name="submit" value="submit"/>
</form>
<h1><?php echo $message; ?></h1>
</body>
</html>

