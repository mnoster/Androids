<?php
session_start();
include("mysql_connect.php");
$user_ID = $_SESSION['ID'];
$friend_ID = 
$query = "INSERT INTO friends(friend_one, friend_2) VALUES ('$user_ID','$friend_ID')";

?>