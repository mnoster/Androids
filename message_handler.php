<?php
session_start();
include("mysql_connect.php");

$sender_ID = $_SESSION['ID'];
//print('sender' . $sender_ID);
$receiver_ID = $_SESSION['o_ID'];
//print('receiver' . $receiver_ID);

$content =addslashes($_POST['content']);
//print('content' . $content);
$profile_image_path = $_SESSION['profile_image_path'];

$query = "INSERT INTO messages(sender_ID, receiver_ID, content, profile_image_path) VALUES ('$sender_ID','$receiver_ID','$content', '$profile_image_path')";

$result = mysqli_query($conn,$query);

$rows_affected = mysqli_affected_rows($conn);
//print("this is username: " . $username);

if($rows_affected > 0){
    $output['message'] = 'success';
    $output['success'] = true;
    $output = json_encode($output);
    print($output);
}else{
    $output['message'] = 'message did not send';
    $output['success'] = false;
    $output = json_encode($output);
    print($output);
}
?>
