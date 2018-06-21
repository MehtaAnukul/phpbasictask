<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/index-media-queries.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid" id="index-content">
        <h1 class="main-heading">Welcome </h1>
        <div id="main-content">
            <div class="row">
                
                <div class="col-md-11">
                    <div class="box">
                        <h2>Login</h2>
                        <form method="POST" action="home.php">
                        <input type="text" name="username" class="input-box" placeholder="Username"   required>
                        <input type="password" name="password" class="input-box" placeholder="Password"  required>
                        <div class="button-box">
                            <button type="submit" class="button button-two login-box-button " id="registerButton">Login</button>
                            </div></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php
    
    $name=$_POST['username'];
    $pwd=$_POST['password'];
    
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("insert_db",$conn);
    $sql="INSERT INTO `register`(`r_id`, `r_username`, `r_password`) VALUES ('','$name','$pwd')";
    mysql_query($sql,$conn);
    ?>
        <script type="application/javascript">
            {
                alert("Registered successfully");
            }

        </script>





