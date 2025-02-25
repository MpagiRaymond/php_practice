<?php
require "conn.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["name"];
    $password = $_POST["password"];
    
    if(empty($name) || empty($password) || empty($information)){
        echo "Please fill all fields";
        return;
    }
    if(isset($name) && isset($password)){
        if($conn->query("INSERT INTO details (NAME, EMAIL, INFORMATION) VALUES ('$name', '$email', '$information')")){
            echo "<script>
            alert('Data successfully sent');
            window.location.href = 'http://localhost/familly/?p=home';
          </script>";
    exit();
        }else{
            echo ("Sending data failed: ".$conn->error);
        }
    }

}
?>