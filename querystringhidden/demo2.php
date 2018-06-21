<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>
<form method="post" action="demo3.php">


<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">

<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
    
<input type="hidden" name="gen" value="<?php echo $_POST['gen']; ?>">
 
<input type="submit" value="Go To Step 3">
</form>


</body>
</html>