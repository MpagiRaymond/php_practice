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
            if(isset($_SESSION['name'])){
        ?>
        <a href="./?p=school"> School</a>
        <?php
            }
            ?>
    </div>
    <?php
            if(isset($_SESSION['name'])){
                ?>
    <form class="out" action="backend/destroy.php" method="post">
        <a href="#" style="color:lightblue; font-size: 1.3em"><?php echo $_SESSION['name'] ?></a>
        <button class="buu" type="submit">logout</button>
    </form>
        <?php
            }
        ?>
</nav>
