<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Androids</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="soundcloud.js"></script>

</head>
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
                <li class="active"><a href="#">Home</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
<div class="container main-contain">
    <div class="row">
        <div class="col-xs-12 main-head">
            <h1>Android Space</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id="left-nav" class="col-xs-3 gen-style">
            <h5><i class="fa fa-spinner w3-spin" style="font-size:64px"></i>
            </h5>
            <hr>
            <input id="sc-search" type="text" class="form-control">
            <button id="submit">search</button>
            <hr>
            <div class='contain-player'>
                <audio controls>
                    <source src="songs/Tell%20Me.mp3" type="audio/mpeg">
                    <source src="songs/Me%20de%20Amor.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
<!--                <div id="SCplayer"></div>-->
            </div>
        </div>
        <div id="main-info" class="col-xs-8 gen-style"></div>
    </div>
</div>
</div>

</html>