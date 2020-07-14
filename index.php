<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Maltin Dev- Home</title>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style2.css">
</head>
<body>
    <!-- END nav -->
    <div class="header">
        <div class="inner-header flex">
                <path fill="transparent" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />

			<?php  if (isset($_SESSION['username'])) : ?>
			<h1 style="color: white; font-family: Comfortaa;">Welcome, <strong><?php echo $_SESSION['username']; ?></strong></h1>
		<?php endif ?>
		<h4 style="color: white; font-family: Comfortaa;" >Helping You Create Content!</h4>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

		<a href="services.php" class="hvr-hang">shop</a>

	</div>
            
        </div>
    

        <!--Waves end-->

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">Maltin Dev</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
  
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
              <li class="nav-item"><a href="index.php?logout='1'" class="nav-link">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END nav -->
    
			<?php  if (isset($_SESSION['username'])) : ?>
			<h1 style="color: white; font-family: Comfortaa;">Welcome, <strong><?php echo $_SESSION['username']; ?></strong></h1>
		<?php endif ?>
		<h4 style="color: white; font-family: Comfortaa;" >Helping You Create Content!</h4>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

		<a href="services.php" class="hvr-hang">shop</a>

	</div>
            
        </div>
    

        <!--Waves end-->




</body>
</html>