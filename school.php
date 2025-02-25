<?php

session_start();

if(isset($_SESSION["name"])){
    
echo "hahaha";
}else{
   echo "<script>
        alert('Data successfully sent');
        window.location.href = 'http://localhost/familly/?p=signup';
      </script>";
    exit();
}
