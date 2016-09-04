<?php
session_start();
include('mysql_connect.php');
if ($conn->connect_error) {
    die("Connection failed ");
}

$output = [];

$query = "SELECT * FROM `users` LIMIT 20";


$result = mysqli_query($conn,$query);

$rows_affected = mysqli_affected_rows($conn);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output[] = $row["username"];
    }
} else {
    echo "0 results";
}

if($rows_affected > 0){
//    $output['message'] = 'success';
//    $output['success'] = true;
    $output = json_encode($output);
    print($output);
}else{
    $output['message'] = 'INCORRECT USER INFO';
    $output['success'] = false;
    $output = json_encode($output);
    print($output);
}

?>