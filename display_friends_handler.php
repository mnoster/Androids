<?php
session_start();
include('mysql_connect.php');
if ($conn->connect_error) {
    die("Connection failed ");
}
$name_output = [];
$img_output = [];
$username_output= [];
$output = [];
$friend_ID = $_POST['friend_ID'];

$query = "SELECT * FROM friends WHERE friend_1 = '$friend_ID' AND status = '2' ORDER BY full_name LIMIT 20";


$result = mysqli_query($conn,$query);

$rows_affected = mysqli_affected_rows($conn);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $username_output["username"][] = $row["username"];
        $name_output["names"][] = $row["full_name"];
        $img_output["profile_img_path"][] = $row["profile_image_path"];
    }
} else {
    echo "0 results";
}
if($rows_affected > 0){
    $output[] = $name_output;
    $output[] = $img_output;
    $output[] = $username_output;
    $output = json_encode($output);
    print($output);

}else{
    $name_output['message'] = 'could not populate friend list';
    $name_output['success'] = false;
    $name_output = json_encode($name_output);
    print($name_output);
}

?>