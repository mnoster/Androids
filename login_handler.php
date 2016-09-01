<?php
session_start();
include('mysql_connect.php');
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$encrypted_pass = sha1($password);

$output = [];

$query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password`='$encrypted_pass'";

mysqli_query($conn,$query);


$rows_affected = mysqli_affected_rows($conn);

//$result = mysqli_query($conn,$query);
//print('<pre>' .print_r($result,true) . '</pre>');
//if(mysqli_num_rows($result) > 0){
//    while($row = mysqli_fetch_assoc($result)){
////        print_r($row, true);
//        $arrayy[]=$row;
//
//    }
//    $arrayy = json_encode($arrayy);
//        print($arrayy);
//    $_SESSION['username'] = $row['username'];
//        print_r($_SESSION);
//}


//when you have a query that is frequently being used you should encrypt and cache the response
//use the php apc functions

if($rows_affected > 0){
    $_SESSION['username'] = $username;
    $output['message'] = 'success';
    $output['success'] = true;
    $output = json_encode($output);
    print($output);
}else{
    $output['message'] = 'INCORRECT USER INFO';
    $output['success'] = false;
    $output = json_encode($output);
    print($output);
}
?>
