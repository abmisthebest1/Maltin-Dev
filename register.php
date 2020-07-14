<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Maltin- Signup</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

</head>
<body>
<div class="context">
    </div>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >


	
	<form method="post" action="register.php" class="login-form">
	
	<div class="login-form h1">
		<h1>Sign Up</h1>
	</div>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>


		<?php include('errors.php'); ?>

		<div class="txtb">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="txtb">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="txtb">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="txtb">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

		<div class="input-group">
			<button type="submit" class="logbtn" name="reg_user">Register</button>
		</div>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

		<p class="bottom-text"> 
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>