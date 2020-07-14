<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Maltin- Login</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

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
<form method="post" action="login.php" class="login-form"+>
	<h1>Login</h1>
	<div class="txtb">
		<input type="text" name="username" placeholder= "Username">
	</div>
	
	<div class="txtb">
		<input type="password" name="password" placeholder="Password" >
	</div>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

	<div class="input-group">
			<button type="submit" class="logbtn" name="login_user">Login</button>
		</div>
		<p class="bottom-text">
			Dont have an account? <a href="register.php">Sign up</a>
		</p>
</form>

</body>
</html>

