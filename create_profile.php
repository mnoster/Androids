<?php
session_start();
if(empty($_SESSION)) {
    header("Location: login.php"); /* Redirect browser, this function is not working properly */ 
    exit();
}
?>

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
                <li class="active"><a href="index.php">Chat</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ME<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="create_profile.php">profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="companions.php">connects</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="squad.php">squad</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="secret.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<!--                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        <li role="separator" class="divider"></li>
                         <li><a href="login.php">Login</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container profile_container">
    <div class="row profile-row">
        <div class="col-xs-2 border">
            <img id="profile_pic" src="<?=$_SESSION['profile_image_path']?>" height="100" width="100">
<!--            <button type="button" id="submit" >submit</button>-->
        </div>
        <div class="col-xs-2 border">
            <div id="display_name"><h2><?=$_SESSION['username']?></h2></div>
            <div id="location">location</div>
            <div id="quote"><?=$_SESSION['quote']?></div>
        </div>
        <div class="col-xs-9 border">
            <div class="profile-header">
                <button class="btn btn-primary">connect</button>
                <button class="btn btn-warning">squad</button>
            </div>
        </div>
    </div>
    <div class="row border">
        <div class="col-xs-4 border ">
            <audio controls>
                <source src="<?$_SESSION['user_song']?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>
    <div class="row border">
        <div class="col-xs-4 fav-animal">
            <h4>Fav Animal</h4>
        </div>
    </div>
</div>
</body>
</html>

<script>
    $('#submit').on('click', function () {
        send_img_ajax();
    });
    function send_img_ajax(e) {
        var upload_file_form = $('#file_upload')[0]; //have to use the [0] because is a jQuery element and we later want to use it in javascript
        var formData = new FormData(upload_file_form); //it is javascript here not jQuery
        console.log("form data: " , formData);
        $.ajax({
            url: "file_handler.php",
            type:'text',
            method: "POST",
            cache: false,
            mimeType: "multipart/form-data",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log("You successfully connected: ", response);
            },
            error: function (response) {
                console.log("There was an error: ", response);
            }
        })
    }
</script>
