<?php
include('mysql_connect.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed ");
}
session_start();// Starting Session
// Storing Session
$username = $_SESSION['username'];

$query = "SELECT * FROM `users` WHERE `username`= `username`";

mysqli_query($conn,$query);

mysqli_



?>