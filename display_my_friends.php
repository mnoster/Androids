<?php
session_start();
include('mysql_connect.php');
if ($conn->connect_error) {
    die("Connection failed ");
}
$name_output = [];
$img_output = [];
$username_output = [];
$output = [];
$friend_ID = $_SESSION['ID'];
//print("friend ID: " . $friend_ID . '<br>');

$query = "SELECT u.full_name, u.profile_image_path, f.friend_1, f.status, f.friend_2, u.ID 
            FROM friends AS f
            JOIN users AS u
            ON u.ID = friend_2
            WHERE friend_1 = '$friend_ID' 
            AND status = '2' LIMIT 20";


$result = mysqli_query($conn, $query);

$rows_affected = mysqli_affected_rows($conn);

if ($result->num_rows < 0) {
    $output['message'][] = 'this user has no friends';
    $output = json_encode($output);
    print($output);

};
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $output['full_name'][] = $row['full_name'];
        $output["profile_image_path"][] = $row['profile_image_path'];
        $output['status'][] = $row['status'];
        $output['friend_ID'][] = $row['ID'];
        $output['current_friend'][] = $row['friend_1'];

    };
    $output['status'] = 'success';
    $output = json_encode($output);
    print($output);
}
?>