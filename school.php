<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
// session_start();

if(isset($_SESSION["name"])){
    
require "home.php";
}else{
   echo "<script>
        alert('Data successfully sent');
        window.location.href = 'http://localhost/familly/?p=signup';
      </script>";
    exit();
}
