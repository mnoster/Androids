<?php
session_start();
include('mysql_connect.php');
if ($conn->connect_error) {
    die("Connection failed ");
}
$username = mysqli_real_escape_string($conn,$_SESSION['username']);
if(empty($_POST['display_name'])){
    $display_name = mysqli_real_escape_string($conn,$_SESSION['display_name']);
}else{
    $display_name = mysqli_real_escape_string($conn,$_POST['display_name']);
};
if(empty($_POST['email'])){
    $email = mysqli_real_escape_string($conn,$_SESSION['email']);
}else{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
};
if(empty($_POST['age'])){
    $age = mysqli_real_escape_string($conn,$_SESSION['age']);
}else{
    $age = mysqli_real_escape_string($conn,$_POST['age']);
};
if(empty($_POST['country'])){
    $country =mysqli_real_escape_string($conn,$_SESSION['country']);
}else{
    $country =mysqli_real_escape_string($conn,$_POST['country']);
};
if(empty($_POST['first_name'])){
    $first_name =mysqli_real_escape_string($conn,$_SESSION['first_name']);
}else{
    $first_name =mysqli_real_escape_string($conn,$_POST['first_name']);
};
if(empty($_POST['last_name'])){
    $last_name =mysqli_real_escape_string($conn,$_SESSION['last_name']);
}else{
    $last_name =mysqli_real_escape_string($conn,$_POST['last_name']);
};
if(empty($_POST['quote'])){
    $quote =mysqli_real_escape_string($conn,$_SESSION['quote']);
}else{
    $quote =mysqli_real_escape_string($conn,$_POST['quote']);
};
if(empty($gender)){
    $gender =mysqli_real_escape_string($conn,$_SESSION['gender']);
}else{
    $gender =mysqli_real_escape_string($conn,$_POST['gender']);
}
$output = [];

$query = "UPDATE users SET display_name ='$display_name', email='$email', age='$age', country='$country', first_name='$first_name', last_name='$last_name', quote='$quote', gender='$gender'
          WHERE username = '$username'";

mysqli_query($conn,$query);


$rows_affected = mysqli_affected_rows($conn);
//print($rows_affected);



if($rows_affected > 0){
    $_SESSION['username'] = $username;
    $output['message'] = 'success';
    $output['success'] = true;
    $output['username'] = $username;
    $output = json_encode($output);
    print($output);
}else{
    $output['message'] = 'Changes not made';
    $output['success'] = false;
    $output = json_encode($output);
    print($output);
}
?>
