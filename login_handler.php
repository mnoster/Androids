<?php
include('mysql_connect.php');
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$encrypted_pass = sha1($password);

$output = [];


$query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`='$encrypted_pass'";

mysqli_query($conn,$query);


$rows_affected = mysqli_affected_rows($conn);


if($rows_affected > 0){
    $output['message'] = 'success';
    $output['success'] = true;
    $output = json_encode($output);
    print($output);
}else{
    $output['message'] = 'INCORRECT USER INFO';
    $output['success'] = false;
    $output = json_encode($output);
    print($output);
}
?>