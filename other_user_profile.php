<?php
session_start();
if (empty($_SESSION)) {
    header("Location: login.php"); /* Redirect browser, this function is not working properly */
    exit();
}
//print_r($_SESSION['background-image-path']);
?>

<!DOCTYPE html>
<html lang="en"
      style="background-image:url('<?= $_SESSION['o_background_image_path'] ?>'); background-repeat: no-repeat; background-position:center; background-color:black">
<head>
    <meta charset="UTF-8">
    <title>Androids</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--    <script src="other_user.js"></script>-->
    <script src="user_list.js"></script>
    <script src="add_friend.js"></script>

<body style="background-color:transparent">
<nav class="navbar navbar-inverse">
    <div class="contatiner-fluid">
        <div class="navbar-header navigation-titles">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=index.php>lo-qo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Chat</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">ME<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="create_profile.php">profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="companions.php">connects</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="squad.php">squad</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="edit_profile.php">edit profile</a></li>
                    </ul>
                </li>
                <li id="user_list"><a href="user_list.php">User List</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="secret.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <!--                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login<span
                            class="caret"></span></a>
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
<div class="container-fluid" style="background:rgba(251, 253, 255, 0.73)">
    <div class="container profile_container" >
        <div class="row profile-row">
            <div class="col-xs-4 col-md-3 col-lg-2 ">
                <div class="img-container">
                    <img id="profile_pic" class="img-responsive" src="<?= $_SESSION['o_profile_image_path'] ?>">
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div id="display_name"><h2 class="no-margin-xs"><?= $_SESSION['o_display_name'] ?></h2></div>
                <div id="country"><?= $_SESSION["o_state"] . ", " . $_SESSION['o_country'] ?></div>
                <div id="quote"><?= $_SESSION['o_quote'] ?></div>
            </div>
            <div class="col-xs-10 col-sm-2">
                <div class="profile-header">
                    <button id="connect" class="btn btn-primary button-style">connect</button>
                    <button id="squad" class="btn btn-warning button-style">squad</button>
                </div>
            </div>
        </div>
        <div class="row border">
            <div class="col-xs-12 col-sm-5 song-contain">
                <audio controls>
                    <source src="<?= $_SESSION['o_user_song'] ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>

    </div>
    <div class="container profile_container">
        <div class="row border">
            <div class="col-xs-4 fav-animal">
                <h4>Connects</h4>
            </div>
        </div>
    </div>
    <div class="container profile_info_container">
        <div class="row border">
            <div class="col-xs-4 fav-animal">
                <h4></h4>
            </div>
        </div>
    </div>
</div>
</body>
</html>
