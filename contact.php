<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Guitar Store</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Markus" />
		<meta name="viewport" content="width-device, initial-scale=1.0">
		<meta name="description" content="E-Commerce" />
		<link href="css/contact.css" rel="stylesheet">
	</head>
	<body>
		<div class="banner">
		   <img class="fadeIn fadeIn-2s fadeIn-Delay-2s" src="images/banner5.jpg">
		</div>
		<div class="active">
		
		<?php
			session_start();
			if (isset($_SESSION["valid_user"])) {
				echo "<h3>Welcome " . $_SESSION["valid_user"] . "</h3>"; echo "<p><a href=\"../Markus/php/logout.php\">LOGOUT</a></p>";
			} else if (isset($_SESSION["valid_admin"])) {
				echo "<h3>Welcome Admin " . $_SESSION["valid_admin"] . "</h3>"; echo "<p><a href=\"../Markus/php/logout.php\">LOGOUT</a></p>";
			}else{
				echo "";
			}
			?>
		</div>
		<header>
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="products.php">PRODUCTS</a></li>
				<li><a href="about.php">ABOUT US</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
					<?php if (!isset($_SESSION["valid_admin"])) { ?> 
			
				<li><a href="login.php">LOGIN</a></li>
				<?php } ?>
				
				<?php if (isset($_SESSION["valid_admin"])) { ?> 
				<li><a href="admin.php"><img src="images/admin.jpg" alt="admin"></a></li>
				<?php } ?>
			</ul>
			
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Contact Us</h1>
                        <hr size="20" width="10%" color="white">
                        <span class="subheading">Have questions? We have answers (maybe).</span>
                    </div>
                </div>
		</header>
		<div id="container" class="clear">
			<h1>Send Us Your Message!</h1>
			<section id="services" class="clear">
			<div class="container">
			<div class='name'>
				<input class='first' placeholder='First Name' type='text'>
				<input class='last' placeholder='Last Name' type='text'>
			</div>
			<div class='contact'>
				<input class='email' placeholder='E-mail Address' type='text'>
			</div>
			<div class='message'>
				<textarea placeholder='Your Suggestions Here!'></textarea>
			</div>
				<button>Send Suggestion</button>
			</div>
      </section>
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