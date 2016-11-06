<?php
include_once 'cart.php'
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Guitar Store</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Markus" />
		<meta name="viewport" content="width-device, initial-scale=1.0">
		<meta name="description" content="E-Commerce" />
		<link href="css/index.css" rel="stylesheet">
	</head>
	<style>
		body {
			background-color: grey;
			}
	</style>
	<body>
		<header>
			<div class="active">
				<?php
				if (!isset($_SESSION["valid_user"])) {
						header('Location: login.php');
				}
					echo "<h3>Welcome " . $_SESSION["valid_user"] . "</h3>"; echo "<p><a href=\"../Markus/php/logout.php\">LOGOUT</a></p>";
				if (isset($_SESSION["valid_admin"])) {
					echo "<h3>Welcome Admin " . $_SESSION["valid_admin"] . "</h3>"; echo "<p><a href=\"../Markus/php/logout.php\">LOGOUT</a></p>";
				}else{
					echo "";
				}
				?>
			</div>
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="products.php">PRODUCTS</a></li>
				<li><a href="about.php">ABOUT US</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="adminlogin.php"><img src="images/admin.jpg" alt="admin"></a></li>
			</ul>
		</header>
		<div id="container" class="clear">
			<article class="one_third">
			<?php
			cart();
			?>
			<br /><br />
			<?php
			products();
			?>
			</article>
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