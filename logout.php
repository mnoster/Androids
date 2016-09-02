<?php
session_start();
$_SESSION['username'] = "";
$_SESSION['url'] = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Androids | Logout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">

<body>
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
                <li class="active"><a href="index.php">Chat</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="secret.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container login-background">
    <div class="col-xs-6 login-inner">
        <div class="logout-title">
            <button class="btn btn-lg btn-primary logout-button">Logout</button>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $(document).on('click', ".logout-button", function () {
        user_logout();
    });
    function user_logout() {
        $.ajax({
            url: 'logout_handler.php',
            method: 'POST',
            dataType: 'json',
            success: function (response) {
                console.log("response is success: ", response);
                if(response.status == "you are logged out"){
                   window.location.replace('login.php');
                }

            },
            error: function (response) {
                console.log("there was an error logging out: ", response);
            }
        })
    }
</script>
