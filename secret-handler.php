<?php
include('mysql_connect.php');
if ($conn->connect_error) {
    die("Connection failed ");
}
$secret_code = mysqli_real_escape_string($conn,$_POST['code']);

$query = "SELECT * FROM `secret` WHERE `code` = '$secret_code'";

mysqli_query($conn,$query);


$rows_affected = mysqli_affected_rows($conn);

if($rows_affected > 0){
    $output['message'] = 'success';
    $output['success'] = true;
    $output = json_encode($output);
    print($output);
}else{
    $output['message'] = 'wrong code';
    $output['success'] = false;
    print($output);
}
?>