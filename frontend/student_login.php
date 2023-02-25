<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="styles (1).css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="icon">
		<h2 class="logo"><img src ="../img/MESS__1_-removebg-preview.png" alt="logo";></h2>
	</div>
	<div class="navbar">
		<a href="index%20(1).html">Home</a>
		<a href="#news">Contact</a>
		</div>
	<!-- <img class="wave" src="img/undraw_resume_re_hkth.svg"> -->
	<div class="container">
		<div class="img">
			<img src="../img/undraw_windows_re_uo4w.svg">
		</div>
		<div class="login-content">
			<form action="../backend/studentlogincheck.php" method="post">
				<img src="../img/undraw_my_documents_re_13dc.svg">
				<h2 class="title">WELCOME</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text" placeholder="userid" class="input" name="userid">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" placeholder ="password"class="input" name="password">
            	   </div>
            	</div>
            	<!-- <a href="#">Forgot Password?</a> -->
            	<input type="submit" class="btn" value="Login" name="submit">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
