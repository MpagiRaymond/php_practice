<?php
// starting sessions
session_start();
require "conn.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $password = $_POST["password"];
    
    if(empty($name) || empty($password)){
        echo "Please fill all fields";
        return;
    }
    if(isset($name) && isset($password)){
        if($conn->query("Select * from details where NAME = '$name' and PWD = '$password'")){

            // setting sessions variables
            $_SESSION["name"] = "$name";

            echo "<script>
            alert('login successfully ' + '" . $_SESSION['name'] . "');
            window.location.href = 'http://localhost/familly/?p=hospital';
            </script>";
            exit();
        }else{
            echo ("Invalid credentials: ".$conn->error);
        }
    }

}
?>