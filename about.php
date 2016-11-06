<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Guitar Store: About</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Markus" />
		<meta name="viewport" content="width-device, initial-scale=1.0">
		<meta name="description" content="E-Commerce" />
		<link href="css/aboutus.css" rel="stylesheet">
	</head>
	<body>
		<div class="banner">
		   <img class="fadeIn fadeIn-2s fadeIn-Delay-2s" src="images/banner2.jpg">
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
                        <h1>About Us</h1>
                        <hr size="20" width="10%" color="white">
                        <span class="subheading">How It All Started</span>
                    </div>
                </div>
		</header>
  <div id="container" class="clear">
		<h1>Welcome To The Guitar Store</h1>
		<p>Whether you're looking to capture the sound of Jimi Hendrix's classic Fender Stratocaster electric guitars, or recreate </p><p>Tom Morello's pitch-shifting solos from his Digitech and Boss electric guitar Effects Pedal rig, we can help.</p>
		<p>The Guitar Store is home to the worlds largest selection of popular guitars and more. </p>
	 <section id="services" class="clear">
        <article class="one_third">
          <figure>
            <figcaption>
              <h2>About Us</h2>
              <p>TGS is a pilgrimage to many who come to marvel over such an enormous inventory and, of course, to buy, trade and sell. <
			  However, they also come to see the product of twenty-five years of collecting vintage instruments, Dave Roger’s personal collection, which is open to the public to view.
			  This ever-expanding collection includes over 300 vintage guitars and approximately 100 amps, and it features a stunning array of custom color Fender Stratocasters, Black Guard Telecasters, dot-neck Gibson 335s and so much more. 
			  For instance, the collection includes a 1959 flame topped Gibson Les Paul, a very rare find, for which current market value is somewhere between $300,000 to $500,000.
			The general, guitar-enlightened public isn’t the only demographic that knows the magic and reputation of DGS. 
			An impressive list of guitar legends and nationally (even internationally) known recording artists and performers has visited or purchased guitars and amps through the shop.
			 Some of these notables are Billy Gibbons (ZZ Top), Joe Walsh (Eagles), Eddie Vetter (Pearljam), Rodney Crowell, Vince Gill, Michael Martin Murphey, Elliot Easton, Faith Hill, members of Pink Floyd, Kentucky Headhunters, Little Big Town, Everclear, Night Ranger, REO Speedwagon and Def Leppard.
			The Rolling Stones once bought an amp for Keith Richards. And, in 2004, at the original Crossroads Show in Dallas, a 1954 custom Gibson Les Paul was sold to Eric Clapton.
			It was a particularly proud moment for Rogers, an accomplished blues guitarist himself, who has always held up Clapton as a favorite influence and personal hero.</p><br />		
			
			<h2>The Present Situation</h2>
			<p> Dave’s Guitar Shop is a bustling retail hub, staffed with over a dozen dedicated employees, technicians and sales consultants.
			Ever present within the walls is Dave himself, the life and blood of the shop, always willing to talk guitars, always willing to say thanks to a customer. 
			It was his vision and passion for guitars that brought DGS to the present and it’s his vision that will see it through the next twenty-five years. Dave’s Guitar Shop invites you to come and see…and be…part of its history.</p><br />	

			<h2>Mission Statement</h2>
			<p>"We strive to offer our clients the highest level of service in guitar sales, repair and consulting. 
			We will, as keys to obtaining this objective, conduct our business according to a high standard of excellence. 
			We are dedicated to earning our client's trust through our professional conduct, our many years of experience, and our extensive preparation for their needs."</p>

              <footer class="more"><a href="contactus.php">Go Now &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
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