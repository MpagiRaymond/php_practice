<?php 
    include "header.php"; 
?>
<style>
<?php include "css/login.css";
    include "css/dashbord.css";
    ?>
    .buu{
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    .out{
        display: flex;
        justify-content: center;
        justify-content: center;
        align-items: center;
    }
</style>

<nav data-menu class="">
    <div class="">
        <div class="logo">
            <img src="images/unik logo.png" alt="">
        </div>
        <div class="motto">East or West...</div>
    </div>
        <?php
            $nav ="boys";
            if(isset($_GET['p'])){
                $nav = $_GET['p'].".php";
            }
        ?>
    <div class="others">
        <a href="./?p=home">Home</a>
        <a href="./?p=about"> About</a>
        <a href="./?p=login"> Contacts</a>
        <a href="./?p=signup"> Signup</a>
        <a href="./?p=home"> notifications</a>
        <?php

        ?>
        <a href="./?p=about"> hospital</a>
        <?php

        ?>
    </div>
    <form class="out" action="" method="post">
        <button class="buu" type="submit">logout</button>
    </form>
</nav>


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