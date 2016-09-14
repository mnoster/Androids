<?php
session_start();
include("mysql_connect.php");

$sender_ID = $_SESSION['ID'];
$receiver_ID = $_SESSION['o_ID'];
$content = $_POST['content'];

$query = "INSERT INTO messages(sender_ID, receiver_ID, content) VALUES ('$sender_ID','$receiver_ID','$content')";

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
