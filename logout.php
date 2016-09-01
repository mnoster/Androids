<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("login.php"); // Redirecting To Home Page
}
?>
