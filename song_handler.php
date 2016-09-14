<?php
session_start();
$username = $_SESSION['username'];
$target_dir = 'user_song/'; //variable to hold target directory
$target_file = $target_dir . $_FILES['upload_file']['name'];// this will create a file path using directory
$user_song_file = $_FILES['upload_file'];
?>
<?php
if (!empty('user_song')) {
    $song_name = pathinfo($_FILES['upload_file']['name']);
}
if($song_name['extension'] == 'mp3'){
//    print('<br>'. "Valid file type sent: ");
    $song_name_state = true;
}
else{
    die();
}
if($user_song_file['size'] > 10000000){
//    print('<br>'."File size is too big, 2MB max");

    $song_size_state['status'] = false;
    $song_size_state = json_encode($song_size_state);
    print($song_size_state);
}
else{
    $song_size_state = true;
}
if($song_name_state && $song_size_state){
    $final_name = $target_dir . $song_name['basename'];
    move_uploaded_file($user_song_file['tmp_name'], $final_name );
    include("mysql_connect.php");
    $final_name = addslashes($final_name);
    $query = "UPDATE users SET user_song = '$final_name'
          WHERE username = '$username'";
    mysqli_query($conn,$query);
    $_SESSION['user_song'] = $final_name;
//    $rows_affected = mysqli_affected_rows($conn);
//    print ($rows_affected);
}
?>