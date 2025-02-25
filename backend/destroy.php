<?php
session_destroy();
echo "<script>
    
    window.href.location = 'http://localhost/familly/?p=signup';
    </script>";
    exit();
?>