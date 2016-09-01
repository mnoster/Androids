<!-- File Handler -->
<!--<pre>-->
<?php
print_r($_POST);
//?>
<!--</pre>-->
<?php
$target_dir = 'uploads/'; //variable to hold target directory
$target_file = $target_dir . $_FILES['upload_file']['name'];// this will create a file path using directory
$user_img_file = $_FILES['upload_file'];
?>
<?php
if (!empty('uploads')) {
    $image_name = pathinfo($_FILES['upload_file']['name']);
}
if($image_name['extension'] == 'gif'|| $image_name['extension'] == 'jpeg'|| $image_name['extension'] == 'jpg'|| $image_name['extension'] == 'png'){
    print('<br>'. "Valid file type sent: ");
    $img_name_state = true;
    print_r($image_name['extension']);
}
if($user_img_file['size'] > 200000){
    print('<br>'."File size is too big, 2MB max");
    $img_size_state = false;
}
else{
    $img_size_state = true;
}
if($img_name_state && $img_size_state){
    $final_name = $target_dir . $image_name['basename'];
    move_uploaded_file($user_img_file['tmp_name'], $final_name );
    print( '<br><br>' . "Your image has been successfully saved");
}
else{
    print( '<br><br>' . "There was an error while saving your image");
}
?>