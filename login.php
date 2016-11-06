<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Guitar Store</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Markus" />
		<meta name="description" content="E-Commerce" />
		<meta name="viewport" content="width-device, initial-scale=1.0">
		<link href="css/login.css" rel="stylesheet">
	</head>
	<body>
		<div class="background">
			<img src="images/guitar3.jpg" alt="guitar">
		</div>
	 	<header>
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="products.php">PRODUCTS</a></li>
				<li><a href="about.php">ABOUT US</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
			</ul>
		</header>
		<div class="main">
			<div class="login-form">
				<h1>User Login</h1>
				<form method="post" action="php/login2.php">
						<input type="text" name="username" class="text" value="USERNAME" onfocus="this.value = '';" onload="if (this.value == '') {this.value = 'USERNAME';}" reload="if (this.value == '') {this.value = 'USERNAME';}" ><br/><br/>
						<input type="password" name="password" value="password"><br/><br/>
						<div class="submit">
							<input type="submit" value="LOGIN" >
						</div>	
					<p><a href="reguser.php">New Here?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="products.php">Logged In?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adminlogin.php">></a></p>
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
			<li><a href="http://facebook.com"><img src="images/facebook.jpg" alt="admin"></a></li>
			<li><a href="http://instagram.com"><img src="images/instagram.jpg" alt="admin"></a></li>
			<li><a href="http://twitter.com"><img src="images/twitter.jpg" alt="admin"></a></li>
			<li><a href="http://googleplus.com"><img src="images/google.jpg" alt="admin"></a></li>
			</ul>
		</div>
	</footer>
</html>