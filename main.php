<!DOCTYPE html>
<html>
<head>
	<title>Friendbook</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
*{
    margin: 0; padding:0; box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

.site-header {
    width: 100%;
    height: 100vh;
    background: #0f8a9d;
    background: linear-gradient(57deg, #00C6A7 , #1E4D92 ); 
    clip-path: polygon(0% 0%, 100% 0%, 100% 80%, 0% 100%);

}




body{
		overflow-x: hidden;
	}


	
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		color: #1da1f2;
		border: 2px solid #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color: #187FAB;
	}

</style>
<body>
<header class="site-header">
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;">Friendbook</h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="left:0.5%;">
			<img src="images/electronics.jpg" class="img-rounded" title="Friendbook" width="650px" height="565px">
			
		</div>
		<div class="col-sm-6" style="left:8%:">
			<img src="images/Captujre.png" class="img-rounded" title="Friendbook" width="80px" height="80px">
			<h2><strong>Welcome For New Experience</strong></h2><br><br>
			
			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
				<?php
					if(isset($_POST['signup'])){
						echo "<script>window.open('signup.php','_self')</script>";
					}
				?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self')</script>";
					}
				?>
			</form>
		</div>
	</div>
</body>
</html>