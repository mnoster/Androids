<?php
session_start();
include('mysql_connect.php');
if ($conn->connect_error) {
    die("Connection failed ");
}
$username = addslashes($_SESSION['username']);
if(empty($_POST['display_name'])){
    $display_name = addslashes($_SESSION['display_name']);
}else{
    $display_name = addslashes($_POST['display_name']);
};
if(empty($_POST['email'])){
    $email = addslashes($_SESSION['email']);
}else{
    $email = addslashes($_POST['email']);
};
if(empty($_POST['age'])){
    $age = addslashes($_SESSION['age']);
}else{
    $age = addslashes($_POST['age']);
};
if(empty($_POST['country'])){
    $country =addslashes($_SESSION['country']);
}else{
    $country =addslashes($_POST['country']);
};
if(empty($_POST['state'])){
    $state =addslashes($_SESSION['state']);
}else{
    $state =addslashes($_POST['state']);
};
if(empty($_POST['first_name'])){
    $first_name =addslashes($_SESSION['first_name']);
}else{
    $first_name =addslashes($_POST['first_name']);
};
if(empty($_POST['last_name'])){
    $last_name =addslashes($_SESSION['last_name']);
}else{
    $last_name =addslashes($_POST['last_name']);
};
if(empty($_POST['quote'])){
    $quote =addslashes($_SESSION['quote']);
}else{
    $quote =addslashes($_POST['quote']);
};
if(empty($_POST['gender'])){
    $gender =addslashes($_SESSION['gender']);
}else{
    $gender =addslashes($_POST['gender']);
};
if(empty($_POST['backdrop_color'])){
    $backdrop_color =addslashes($_SESSION['backdrop_color']);
}else{
    $backdrop_color =addslashes($_POST['backdrop_color']);
};

$full_name = $first_name ." ". $last_name;
//print( "backdrop color: " . $backdrop_color);

$query = "UPDATE users SET display_name ='$display_name', email='$email', age='$age', country='$country', state='$state', first_name='$first_name', last_name='$last_name', backdrop_color = '$backdrop_color',full_name = '$full_name', quote='$quote', gender='$gender'
          WHERE username = '$username'";

mysqli_query($conn,$query);


$rows_affected = mysqli_affected_rows($conn);
//print("this is username: " . $username);



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
