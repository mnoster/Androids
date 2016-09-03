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
        <div class="col-xs-2 border">
            <h4>Display Name: </h4><input id="display_name" placeholder="<?= $_SESSION['display_name'] ?>">
            <h4>Country: </h4><input id="location" placeholder="<?= $_SESSION['country'] ?>">
            <h4>Quote: </h4><input id="quote" placeholder="<?= $_SESSION['quote'] ?>">
            <h4>Gender: </h4>
            <select>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <h4>First Name: </h4><input id="first_name" placeholder="<?= $_SESSION['first_name'] ?>">
            <h4>Last Name: </h4><input id="last_name" placeholder="<?= $_SESSION['last_name'] ?>">
            <h4>Email: </h4><input id="email" placeholder="<?= $_SESSION['email'] ?>">
            <h4>Age: </h4><input id="age" placeholder="<?= $_SESSION['age'] ?>">
            <button class="btn" id="save_changes_btn">save changes</button>
        </div>

    </div>
    <div class="col-xs-12 file_btn">
        <h4>Change profile image</h4>
        <form id="file_upload">
            <input type="file" name="upload_file">
        </form>
        <button type="button" id="submit_img">change image</button>
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
        console.log("form data: ", formData);
        $.ajax({
            url: "file_handler.php",
            type: 'text',
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

