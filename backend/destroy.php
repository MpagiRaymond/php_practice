<?php
session_start();

// unset all session variables
$_SESSION = array();

// destroy session
session_destroy();

 // Redirect to the login page or any other page
header("Location: http://localhost/familly/?p=signup");
    exit();
?>