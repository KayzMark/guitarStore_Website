<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Guitar Store</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Markus" />
		<meta name="description" content="E-Commerce" />
		<meta name="viewport" content="width-device, initial-scale=1.0">
		<link href="css/adminlogin.css" rel="stylesheet">
		<script src="login.js"></script> 
	</head>
	<body>
	
		</div>
		<div class="background">
			<img src="images/guitar1.jpg" alt="guitar">
		</div>
	 	<header>
			<ul>
				<li><a href="home.php">HOME</a></li>
			</ul>
		</header>
		<div class="main">
			<div class="login-form">
				<h1>ADMIN LOGIN</h1>
				<form method="post" action="php/admin.php">
						<input type="text" name="username" class="text" value="ADMIN NAME" onfocus="this.value = '';" onload="if (this.value == '') {this.value = 'USERNAME';}" >
						<input type="password" name="password" value="password">
						<div class="submit">
							<input type="submit" value="LOGIN" >
						</div>	
					<p><a href="login.php">Not Admin?</a></p>
				</form>
			</div>
		</div>
	</body>
	<footer class="mainFooter">
		<div class="container">  
			<ul>
			<li>Design By - Markus Kukorimam © 2015 </li>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<li>You Can Find Us:</li>
			<li><a href="facebook.com"><img src="images/facebook.jpg" alt="admin"></a></li>
			<li><a href="facebook.com"><img src="images/instagram.jpg" alt="admin"></a></li>
			<li><a href="facebook.com"><img src="images/twitter.jpg" alt="admin"></a></li>
			<li><a href="facebook.com"><img src="images/google.jpg" alt="admin"></a></li>
			</ul>
		</div>
	</footer>
</html>