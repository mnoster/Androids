<?php
session_start();
include('mysql_connect.php');
if ($conn->connect_error) {
    die("Connection failed ");
}

$name_output = [];
$img_output = [];
$output = [];

$query = "SELECT * FROM `users` ORDER BY full_name LIMIT 20";


$result = mysqli_query($conn,$query);

$rows_affected = mysqli_affected_rows($conn);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name_output["names"][] = $row["full_name"];
        $img_output["profile_img_path"][] = $row["profile_image_path"];
    }
} else {
    echo "0 results";
}

if($rows_affected > 0){
    $output[] = $name_output;
    $output[] = $img_output;
    $output = json_encode($output);
    print($output);

}else{
    $name_output['message'] = 'INCORRECT USER INFO';
    $name_output['success'] = false;
    $name_output = json_encode($name_output);
    print($name_output);
}

?>