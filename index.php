<?php 
    session_start();
    include "header.php"; 
?>
<style>
<?php include "css/login.css";
    include "css/dashbord.css";
    ?>
    
</style>
<?php require 'navigation.php';?>
<main class="mm">

<?php 
    if(file_exists($nav)){
        require $nav;
    } 
?>
</main>
<?php
    include "footer.php";
?>