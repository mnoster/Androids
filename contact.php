<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lo-qo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="contact_script.js"></script>
<body>
<nav class="navbar navbar-inverse">
    <div class="contatiner-fluid">
        <div class="navbar-header navigation-titles">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">lo-qo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="login.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="secret.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container login-background">
    <div class="col-xs-12 col-sm-8 col-md-5 contact-contain">
        <div class="col-xs-12 contact-inner">
            <h2>Contact Us</h2>
            <form>
                <input id="name" class="form-control" placeholder="your name"><br>
                <input id="email" class="form-control" placeholder="your email address"><br>
                <input id="subject" class="form-control" placeholder="Subject"><br>
                <textarea class="form-control" id="textarea" placeholder="Your message" rows="8"></textarea>
            </form>
            <button id="submit" class="btn btn-info" value="submit">Send Mail</button>
        </div>

    </div>
</div>
</body>
</html>
