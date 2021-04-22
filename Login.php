<?php include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
			background-image: url('backgroundimage.jpg');
			background-size: cover;
		}
		form{
			background-color: #fff;
			margin-left: 30em;
			margin-right: 10em;
			margin-top: 6em;
			padding: 40px;
			box-shadow: 10px 10px 8px 10px #888888;

		}
	</style>
</head>
<body>
	<div class="container">
		<form method="POST">
		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
		    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
		  </div>
		  <button type="submit" class="btn btn-primary" name="Login">Submit</button>
          <p style="text-align: center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p>
		</form>
        
	</div>
</body>
</html>