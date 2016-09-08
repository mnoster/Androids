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
$friend_ID = $_SESSION['o_ID'];
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
    $output['message'][]='this user has no friends';
    $output = json_encode($output);
    print($output);

};
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
print_r($row);
    };
//    print_r($friend_ID_array['friend_array']);
//    print($row);
}


//    while($row = $result->fetch_assoc()) {
//        $username_output["username"][] = $row["username"];
//        $name_output["names"][] = $row["full_name"];
//        $img_output["profile_img_path"][] = $row["profile_image_path"];
//    }


//else {
//    echo "0 results";
//}
//if($rows_affected > 0){
//    $output[] = $name_output;
//    $output[] = $img_output;
//    $output[] = $username_output;
//    $output = json_encode($output);
//    print($output);
//
//}else{
//    $name_output['message'] = 'could not populate friend list';
//    $name_output['success'] = false;
//    $name_output = json_encode($name_output);
//    print($name_output);
//}
    ?>