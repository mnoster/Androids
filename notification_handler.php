<?php
session_start();// Starting Session
include('mysql_connect.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed ");
}
// Storing Session
$userID = $_SESSION['ID'];
$friend_message = [];

$query = "SELECT * FROM `friends` WHERE `friend_1`= '$userID'";


$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $friend_message['status'][] = $row["status"];
        $_SESSION["ID"]=$row["ID"];
//        echo "username: " . $row["username"]. " profile image: " . $row["quote"]. " " . $row["background_image_path"]. "<br>";
    }
} else {
    echo "0 results";
}
//print("user song: ") . print_r($_SESSION['user_song'],true);
$user_info = json_encode($user_info);
print($user_info)

?>