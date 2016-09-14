<?php

if(empty($_SESSION['username'])){
    include('login.php');
}
else{
    include('default-home.php');
}
?>
