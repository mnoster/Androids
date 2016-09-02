<?php
session_start();// Starting Session
include('mysql_connect.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed ");
}
// Storing Session
$username = $_SESSION['username'];
$user_info = [];

$query = "SELECT * FROM `users` WHERE `username`= `username`";


$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user_info[] = $row["username"];
        $user_info[] = $row["quote"];
        $user_info[] = $row["background_image_path"];
//        echo "username: " . $row["username"]. " profile image: " . $row["quote"]. " " . $row["background_image_path"]. "<br>";
    }
} else {
    echo "0 results";
}
$user_info = json_encode($user_info);
print($user_info)

?>