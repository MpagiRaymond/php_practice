
<style>
<?php require "css/signup.css";?>
main{
	flex-direction: column;
}
form{
	box-shadow:none;
}
</style>
<!-- <div class="cover"> -->
    <p class="top"> login screen </p>
	<form class="flex center " action="backend/verify.php" method="post">
		<div class="first_page input-group">
			<div class="input-group">
				<input id="person_name" name="name" class="input" placeholder="surname"> </input>
				<label class="placeholder"> Surname </label>
			</div>
			
			<div class="input-group">
			<input type="password" id="password" name="password" class="input" placeholder="Password" > </input>
			<label class="placeholder"> password </label>
			</div>
			<!-- <a> -->
				<button type="submit" class="me"> Submit </button>
			<!-- </a> -->

			<hr>
			<p > &copy If you don't have an account <a href="page2.html"> Signin </a> </p>
		</div>
	</form>
<!-- </div> -->
