<?php
session_start();
if (empty($_SESSION)) {
    header("Location: login.php"); /* Redirect browser */
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Androids</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="edit_profile.js"></script>
    <script src="login_script.js"></script>
<body style="background-color:black">
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
                <li><a href="#">Contact</a></li>
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
<div class="container edit_profile_container ">
    <h2>Edit Profile</h2>
    <div class="row edit_profile_row">
        <div class="col-xs-11 border">
            <h4>Display Name: </h4><input id="display_name" placeholder="<?= $_SESSION['display_name'] ?>">
            <h4>Country: </h4><input id="country" placeholder="<?= $_SESSION['country'] ?>">
            <h4>Quote: </h4><input id="quote" placeholder="<?= $_SESSION['quote'] ?>">
            <h4>Gender: </h4>
            <select id="gender">
                <option></option>
                <option value="Man">Man</option>
                <option value="Woman">Woman</option>
            </select>
            <h4>First Name: </h4><input id="first_name" placeholder="<?= $_SESSION['first_name'] ?>">
            <h4>Last Name: </h4><input id="last_name" placeholder="<?= $_SESSION['last_name'] ?>">
            <h4>Email: </h4><input id="email" placeholder="<?= $_SESSION['email'] ?>">
            <h4>Age: <span class="pull-right glyphicon glyphicon-download btn-to-bottom"></span> </h4><input id="age" placeholder="<?= $_SESSION['age'] ?>">

        </div>
    </div>
    <div class="row to-bottom">
        <div class="col-xs-3">
            <button class="btn" id="save_changes_btn">save changes</button>
        </div>
        <div class="col-xs-8">

        </div>
    </div>
    <div class="row change-img-row">
        <h4>Change profile image</h4>
        <div class="col-xs-12 file_btn">
            <form id="file_upload">
                <input type="file" name="upload_file" id="upload-img-file">
            </form>
        </div>
    </div>
    <div class="row change-img-row">
        <button class="btn btn-info" id="submit_img">change image</button>
    </div>
    <div class="row change-img-row">

        <h4>Change background image</h4>
        <div class="col-xs-12 file_btn">
            <form id="file_upload">
                <input type="file" name="upload_file" id="upload-img-file">
            </form>
        </div>
    </div>
    <div class="row change-img-row">
        <button class="btn btn-info" id="submit_img">change background image</button>
    </div>
    <div class="row change-img-row">
        <h4>Change background image</h4>
        <div class="col-xs-12 file_btn">
            <form id="file_upload">
                <input type="file" name="upload_file" id="upload-img-file">
            </form>
        </div>
    </div>
    <div class="row change-img-row">
        <button class="btn btn-info" id="submit_img">change background image</button>
    </div>
    <div class="row change-img-row">
        <h4>Change profile song</h4>
        <div class="col-xs-12 file_btn">
            <form id="file_upload">
                <input type="file" name="upload_file" id="upload-img-file">
            </form>
        </div>
    </div>
    <div class="row change-img-row bottom-row">
        <button class="btn btn-info" id="submit_img">change background image</button>
    </div>

</div>
</body>
</html>
