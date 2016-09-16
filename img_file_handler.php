<?php
session_start();
$username = $_SESSION['username'];
$target_dir = '/user_image/'; //variable to hold target directory
$target_file = $target_dir . $_FILES['upload_file']['name'];// this will create a file path using directory
$user_img_file = $_FILES['upload_file'];
?>
<?php
if (!empty('user_image')) {
    $image_name = pathinfo($_FILES['upload_file']['name']);
}
if($image_name['extension'] == 'gif'|| $image_name['extension'] == 'jpeg'|| $image_name['extension'] == 'jpg'|| $image_name['extension'] == 'png'|| $image_name['extension'] == 'JPG'|| $image_name['extension'] == 'JPEG'){
//    print('<br>'. "Valid file type sent: ");
    $img_name_state = true;
//    print_r($image_name['extension']);
}
if($user_img_file['size'] > 2000000){
//    print('<br>'."File size is too big, 2MB max");

    $img_size_state['status'] = false;
    $img_size_state = json_encode($img_size_state);
    print($img_size_state);
}
else{
    $img_size_state = true;
}
if($img_name_state && $img_size_state){
    $final_name = $target_dir . $image_name['basename'];
    move_uploaded_file($user_img_file['tmp_name'], $final_name );
    include("mysql_connect.php");
    $query = "UPDATE users SET profile_image_path = '$final_name'
          WHERE username = '$username'";
    mysqli_query($conn,$query);
    $_SESSION['profile_image_path'] = $final_name;
//    $rows_affected = mysqli_affected_rows($conn);
//    print ($rows_affected);
}

?>