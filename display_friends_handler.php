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
$friend_ID = $_SESSION['o_ID'];
//print("friend ID: " . $friend_ID . '<br>');

$query = "SELECT * FROM friends WHERE friend_1 = '$friend_ID' AND status = '2' LIMIT 20";


$result = mysqli_query($conn,$query);

$rows_affected = mysqli_affected_rows($conn);
if ($result->num_rows == 0) {
//        print('this user has no friends');

    };
if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $friend_ID_array["friend_array"][] = $row["friend_2"];

       };
//    print(count($friend_ID_array['friend_array']));
        for( $i = 0; $i < count($friend_ID_array['friend_array']); $i++){
            $query_friends = "SELECT * FROM friends WHERE friend_1 = '$friend_ID' AND status = '2' LIMIT 10";
    };


//    while($row = $result->fetch_assoc()) {
//        $username_output["username"][] = $row["username"];
//        $name_output["names"][] = $row["full_name"];
//        $img_output["profile_img_path"][] = $row["profile_image_path"];
//    }

function get_friends_info(){
    
}





}
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