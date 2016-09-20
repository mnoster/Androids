<?php
session_start();  // Starting Session
include('mysql_connect.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed ");
}
// Storing Session
$username = $_POST['username'];
$user_info = [];

$query = "SELECT * FROM `users` WHERE `username`= '$username'";


$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
//        $user_info[] = $row["username"];
        $_SESSION['o_username'] = $row["username"];
        $_SESSION['username'] = $row["username"];
        $_SESSION["o_display_name"] = $row["display_name"];
        $user_info[] = $row["age"];
        $_SESSION["o_age"] = $row["age"];
        $user_info[] = $row["gender"];
        $_SESSION["o_gender"] = $row["gender"];
        $user_info[] = $row["country"];
        $_SESSION["o_country"] = $row["country"];
        $user_info[] = $row["first_name"];
        $_SESSION["o_first_name"] = $row["first_name"];
        $user_info[] = $row["last_name"];
        $_SESSION["o_last_name"] = $row["last_name"];
        $user_info[] = $row["quote"];
        $_SESSION['o_quote'] = $row["quote"];
        $user_info[] = $row["background_image_path"];
        $_SESSION['o_background_image_path']=$row["background_image_path"] ;
        $user_info[] = $row["profile_image_path"];
        $_SESSION['o_profile_image_path']=$row["profile_image_path"];
        $user_info[] = $row["user_song"];
        $_SESSION['o_user_song']=$row["user_song"];
        $user_info[] = $row["email"];
        $_SESSION["o_email"]=$row["email"];
        $user_info[] = $row["state"];
        $_SESSION["o_state"]=$row["state"];
        $user_info[] = $row["full_name"];
        $_SESSION["o_full_name"]=$row["full_name"];
        $user_info[] = $row["backdrop_color"];
        $_SESSION["o_backdrop_color"]=$row["backdrop_color"];
        $user_info[] = $row["ID"];
        $_SESSION["o_ID"]=$row["ID"];
//        echo "username: " . $row["username"]. " profile image: " . $row["quote"]. " " . $row["background_image_path"]. "<br>";
    }
    $user_info['status'] = "success";
    $friend_2 = $_SESSION["o_ID"];
    $friend_1 = $_SESSION['ID'];
} else {
    echo "0 results";
}
$query2 = "SELECT * FROM `friends` WHERE `friend1`= '$friend_1' AND `friend2` ='$friend_2'";
$result2 = $conn->query($query);

if($result2->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        if($row['status'] == 2){
            $_SESSION['friend_status'] = "already friends";
            $user_info['friend_status'] = 'friend'; 
        }
        else{
            $_SESSION['friend_status'] = "connect";
        }
    }
}
if($user_info['status']=='success'){
    $user_info = json_encode($user_info);
    print($user_info);  
}
?>