<?php

if(empty($_SESSION)){
    include('login.php');
}
else{
    include('create_profile.php');
}
?>
