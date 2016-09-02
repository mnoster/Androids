<?php
session_start();

if(empty($_SESSION)){
    include('login.php');
}
else{
    include('default-home.php');
}
?>
