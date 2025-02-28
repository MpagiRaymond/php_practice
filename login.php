<?php
if(isset($_POST['submit'])){
    header('location:index.php');
}
?>
<?php 
    include "header.php"; 
    include "backend/send.php";

?>
<style>
<?php include "css/login.css"?>
main{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 20px;
}
</style>
<script src="javascript/login.js" defer>
</script>
<form class="form flex center c flex-grow" action="backend/send.php" method="post">
    <div data-signin class="signin grid w g">
        <!-- name -->
        <label for="name">Name:</label>
        <input class="input" type="text" name="name" id="name">

        <!-- email -->
        <label  for="email">Email</label>
        <input class="input" type="email" name="email" id="email">
        
        <!-- pwd -->
        <label  for="email">Password</label>
        <input class="input" type="password" name="password" id="email">

        <!-- message -->
        <label for="information">Message:</label>
        <textarea class="input" type="text" name="information" id="pwd"></textarea>
        <button class="input w mc" type="submit" name="submit">Submit</button>

        <div class="input wel">Your presence matters.</div>
    </div>
</form>
            
<div class="comment-form-container">
        <h2>We would want to see your respose to our website.</h2>
        <form class="comment-form" method="post" action="backend/comments.php">
            <div class="form-group">
                <label for="comment">Name</label>
                <textarea id="comment" name="names" rows="5" required></textarea>
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" rows="5" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
</div>
<script src="javascript/login.js" defer>
</script>
<?php
    include "footer.php";
?>