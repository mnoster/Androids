<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Androids</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                <li class="active"><a href="index.php">Home</a></li>
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
<div class="container profile_container">
    <div class="row">
        <div class="col-xs-2">
            <img id="profile_pic" src="images/alien%20profile.jpg" height="100%" width="100%">
        </div>
        <div class="col-xs-2">
            <div id="display_name"><h2>Alien</h2></div>
            <div id="location">location</div>
            <div id="quote">Quote</div>
        </div>
        <div class="col-xs-9">
            <div class="profile-header">

            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $(document).on('click', ".login-button", function () {
        user_login();
    });
    function user_login() {
        var email = $('#email').val();
        console.log(email);
        var password = $('#password').val();
        console.log(password);

        $.ajax({
            url: 'login_handler.php',
            method: 'POST',
            data: {
                email: email,
                password: password
            },
            dataType: 'json',
            success: function (response) {
                console.log("response is success: ", response);
                if (response.success == true) {
                    window.location.replace('profile.php');
                }
            },
            error: function (response) {
                console.log("there was an error: ", response);
                $('<div>').addClass("text-danger").text("Invalid code").appendTo('#error-message');
            }
        })
    }
</script>