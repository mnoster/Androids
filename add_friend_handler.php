<?php
session_start();
include("mysql_connect.php");

$user_ID = $_SESSION['ID'];
$friend_ID = $_POST['friend_ID'];
$query = "INSERT INTO friends(friend_1, friend_2) VALUES ('$user_ID','$friend_ID')";

$result = mysqli_query($conn,$query);

$rows_affected = mysqli_affected_rows($conn);
//print("this is username: " . $username);

if($rows_affected > 0){
    $output['message'] = 'success';
    $output['success'] = true;
    $output = json_encode($output);
    print($output);
}else{
    $output['message'] = 'already connected';
    $output['success'] = false;
    $output = json_encode($output);
    print($output);
}
?>
