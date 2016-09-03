<?php
session_start();
include('mysql_connect.php');
if ($conn->connect_error) {
    die("Connection failed ");
}
$username = mysqli_real_escape_string($conn,$_SESSION['username']);
$display_name = mysqli_real_escape_string($conn,$_POST['display_name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$age = mysqli_real_escape_string($conn,$_POST['age']);
$country =mysqli_real_escape_string($conn,$_POST['county']);
$first_name =mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name =mysqli_real_escape_string($conn,$_POST['last_name']);
$gender =mysqli_real_escape_string($conn,$_POST['gender']);
$quote =mysqli_real_escape_string($conn,$_POST['quote']);


$output = [];

$query = "UPDATE users SET display_name ='$display_name', email='$email', age='$age', country='$country', first_name='$first_name', last_name='$last_name', gender='$gender', quote='$quote')
          WHERE username = '$username'";

mysqli_query($conn,$query);


$rows_affected = mysqli_affected_rows($conn);



if($rows_affected > 0){
    $_SESSION['username'] = $username;
    $output['message'] = 'success';
    $output['success'] = true;
    $output = json_encode($output);
    print($output);
}else{
    $output['message'] = 'Account not created';
    $output['success'] = false;
    $output = json_encode($output);
    print($output);
}
?>
