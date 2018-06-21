<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DB_Demo

    </title>
    <link href="css/index.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/index-media-queries.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container-fluid" id="index-content">
        <h1 class="main-heading">Welcome </h1>
        <div id="main-content">
            <div class="row">
                <div class="col-md-6">
                    <div id="login-box" class="box">
                        <h2>Login</h2>
                        <!--<div class="error-box">
Sorry, the login details are wrong.
</div>-->
                        <form method="post" action="">
                            <input type="text" name="username" class="input-box" placeholder="Username">
                            <input type="password" name="password" class="input-box" placeholder="Password">
                            <div class="button-box">
                                <button type="submit" class="button button-two login-box-button">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="content-area" class="box pull-right">
                        <h2>Register</h2>
                        <input type="text" name="username" class="input-box" placeholder="Username">
                        <input type="password" name="password" class="input-box" placeholder="Password">
                        <div class="button-box">
                            <button type="button" class="button button-two login-box-button " id="registerButton">Register</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>