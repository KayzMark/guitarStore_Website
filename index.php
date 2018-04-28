<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Guitar Store</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Markus" />
		<meta name="viewport" content="width-device, initial-scale=1.0">
		<meta name="description" content="E-Commerce" />
		<link href="css/main.css" rel="stylesheet">
	</head>
	<body>
		<div class="banner">
		   <img class="fadeIn fadeIn-2s fadeIn-Delay-2s" src="images/banner1.jpg">
		</div>
		<div class="active">
		
	<div  class="active">
  		<?php
			session_start();
			if (isset($_SESSION["valid_user"])) {
				echo "<h3>Welcome " . $_SESSION["valid_user"] . "</h3>"; echo "<p><a href=\"../Markus/php/logout.php\">LOGOUT</a> </p><br /><a href=\"index1.php\"><img src =\"../Markus/images/cartimg.jpg\" width=\"40px\" height=\"40px\"></a>";
			} else if (isset($_SESSION["valid_admin"])) {
				echo "<h3>Welcome Admin " . $_SESSION["valid_admin"] . "</h3>"; echo "<p><a href=\"../Markus/php/logout.php\">LOGOUT</a></p>";
			}else{
				echo "";
			}
		?>
	</div>	
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
                        <h1>The Guitar Store</h1>
                        <hr size="20" width="10%" color="white">
                        <span class="subheading">Your Music Journey Starts Here</span>
                    </div>
                </div>
		</header>
  <div id="container" class="clear">
	 <section id="services" class="clear">
		<h1>Welcome To The Guitar Store</h1>
		<p>Whether you're looking to capture the sound of Jimi Hendrix's classic Fender Stratocaster electric guitars, or recreate </p><p>Tom Morello's pitch-shifting solos from his Digitech and Boss electric guitar Effects Pedal rig, we can help.</p>
		<p>The Guitar Store is home to the worlds largest selection of popular guitars and more. </p>
        <article class="one_third">
          <figure><img class="fadeIn fadeIn-2s fadeIn-Delay-2s" src="images/guitar2.jpg" width="100%" height="100%" alt="guitar">
            <figcaption>
              <h2>About Us</h2><br/>
              <p>Find out about our organization, commitment and the results of our decades of advocacy.</p>			  
			  <p>Everything you will ever need to know.</p>
              <footer class="more"><a href="about.php">Go Now &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <figure><img class="fadeIn fadeIn-2s fadeIn-Delay-2s" src="images/guitar6.jpg" width="100%" height="100%" alt="guitar">
            <figcaption>
              <h2>Contact Us</h2><br/>
              <p>Contact us for help, support or advice on any aspect of guiitar products and services.</p>
			  <p>Fill out the form to send your message!</p>
              <footer class="more"><a href="contact.php">Go Now &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
		<h1>Cant View Products?</h1>
		<p>LogIn or Register To View Products.</p>
		<footer class="final"><a href="login.php">Go Now &raquo;</a></footer>
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
