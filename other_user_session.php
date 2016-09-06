<?php
session_start();  // Starting Session
include('mysql_connect.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed ");
}
// Storing Session
$full_name = $_POST['full_name'];

$query_name = "SELECT * FROM `users` WHERE `username`= '$username'";

$result = $conn->query($query);
while($row = $result->fetch_assoc()) {
    $user_info[] = $row["username"];
}

$query = "SELECT * FROM `users` WHERE `username`= '$username'";


$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user_info[] = $row["username"];
        $_SESSION['username'] = $row["username"];
        $user_info[] = $row["display_name"];
        $_SESSION["display_name"] = $row["display_name"];
        $user_info[] = $row["age"];
        $_SESSION["age"] = $row["age"];
        $user_info[] = $row["gender"];
        $_SESSION["gender"] = $row["gender"];
        $user_info[] = $row["country"];
        $_SESSION["country"] = $row["country"];
        $user_info[] = $row["first_name"];
        $_SESSION["first_name"] = $row["first_name"];
        $user_info[] = $row["last_name"];
        $_SESSION["last_name"] = $row["last_name"];
        $user_info[] = $row["quote"];
        $_SESSION['quote'] = $row["quote"];
        $user_info[] = $row["background_image_path"];
        $_SESSION['background_image_path']=$row["background_image_path"] ;
        $user_info[] = $row["profile_image_path"];
        $_SESSION['profile_image_path']=$row["profile_image_path"];
        $user_info[] = $row["user_song"];
        $_SESSION['user_song']=$row["user_song"];
        $user_info[] = $row["email"];
        $_SESSION["email"]=$row["email"];
        $user_info[] = $row["state"];
        $_SESSION["state"]=$row["state"];
        $user_info[] = $row["full_name"];
        $_SESSION["full_name"]=$row["full_name"];
        $user_info[] = $row["ID"];
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