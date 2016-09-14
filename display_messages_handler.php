<?php
session_start();
include('mysql_connect.php');
if ($conn->connect_error) {
    die("Connection failed ");
}

$img_output = [];
$content_output = [];
$output = [];
$user_ID = $_SESSION['ID'];
//print("friend ID: " . $friend_ID . '<br>');

$query = "SELECT m.profile_image_path, m.sender_ID, m.content 
            FROM messages AS m
            WHERE m.receiver_ID = '$user_ID'
            ORDER BY m.time DESC
            LIMIT 20";


$result = mysqli_query($conn, $query);

$rows_affected = mysqli_affected_rows($conn);

if ($result->num_rows < 0) {
    $output['message'][] = 'this user has no friends';
    $output = json_encode($output);
    print($output);

};
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $output["profile_image_path"][] = $row['profile_image_path'];
        $output['content'][] = $row['content'];

    };
    $output['status'] = 'success';
    $output = json_encode($output);
    print($output);
}
?>