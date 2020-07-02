<!DOCTYPE html>
<html>
    <head>
        <title> Signup </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style_login.css">
    </head>
    <body>
        <form action="process/signup_process.php" method="POST">
        <div class="login-box">
            <h1>Signup</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" placeholder="Email" name="email" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="pswd" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Confirm Password" name="con_pswd" value="">
            </div>

            <input type="submit" class="btn" name="" value="Enter">

            <div class="">
                <a href="signin.php"> Already a Member ??</a>
            </div>
        </div>
    </form>
    </body>
</html>