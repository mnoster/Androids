<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Androids</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="register_user.js"></script>
<body style="background-color: #250065">
<nav class="navbar navbar-inverse">
    <div class="contatiner-fluid">
        <div class="navbar-header navigation-titles">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=index.php>Androids</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container login-background">
    <div class="wrapper login-inner">
        <form class="form-signin">
            <h2 class="form-signin-heading">Sign up</h2>
            <input type="text" class="form-control form-group" name="username" id="username" placeholder="username"/>
            <input type="email" class="form-control form-group" name="email" id="email" placeholder="Email Address"/>
            <input type="password" class="form-control form-group" name="password" id="password" placeholder="Password" />
            <input type="password" class="form-control form-group" name="password2" id="password2" placeholder="Retype Password"/>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
        </form>
        <button class="btn btn-lg btn-primary btn-block" id="create_user">Sign Up</button>
        <p style="margin-top:10px">Already a member? Sign in <a href="login.php">here</a></p>
        <div id="#error-message"></div>
    </div>
    <br>

</div>
</body>
</html>
