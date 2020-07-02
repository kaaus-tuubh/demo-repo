<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/style_login.css">
    </head>
    <body>
        <form action = "process/signin_process.php" method="POST">
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" id="uname" name="uname" placeholder="Usename" required>
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" id="pswd" name="pswd" placeholder="Password" required>
            </div>

            <input type="submit" class="btn" name="submit" value="Login">

            <div>
                <a href="signup.php"> New User ??</a>
            </div>

            <div>
                <a href="wdc.html"> Forgot Password ??</a>
            </div>
        </div>
    </form>
    </body>
</html>