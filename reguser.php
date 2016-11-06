<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Guitar Store</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Markus" />
		<meta name="description" content="E-Commerce" />
		<meta name="viewport" content="width-device, initial-scale=1.0">
		<link href="css/reguser.css" rel="stylesheet">
	</head>
	<body>
		<div class="background">
			<img src="images/guitar3.jpg" alt="guitar">
		</div>
	 	<header>
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="about.php">ABOUT US</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
				<li><a href="login.php">LOGIN</a></li>
			</ul>
		</header>
		<div class="main">
		<?php
			include '../Markus/php/connection.php';
			if (!isset($_POST['email'])) {
				$_POST['email'] = NULL;
			}
			if (!isset($_POST['username'])) {
				$_POST['username'] = NULL;
			}
			if (!isset($_POST['password'])) {
				$_POST['password'] =NULL;
			}
		?>
			<div class="login-form">
				<h1>User Registration</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form method="post" action="reguser.php">
						<input type="text" name="full_name" value="FULL NAME">
						<input type="text" name="username" class="text" value="USERNAME">
						<input type="password" name="password" value="password">
						<input type="text" name="email" value="EMAIL">
						<div class="submit">
							<input type="submit" value="SUBMIT" >
						</div>
					<p><a href="login.php">Already Have An Account?</a></p>
				</form>
				<?php
				if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
				{
					$username = $_POST['username'];
					$email = $_POST['email'];
					$email = filter_var($email, FILTER_SANITIZE_EMAIL);
					$password = $_POST['password'];
					if(empty($username) OR empty($email) OR empty($password))
					{
						echo '<h3>*Please all fields are required*</h3>';
					}
					else  if (!filter_var ($email, FILTER_VALIDATE_EMAIL))
					{
					echo '<h3> Invalid email</h3>';
					}
					if(strlen($password)<=6)
					{
						echo '<h3>Password must be up six charaters</h3>';
					}
					else {
						$query = "INSERT INTO users(username, password, email) VALUES ('$username', '$password', '$email')";
						mysqli_query($connection, $query) or die(mysqli_error($connection));
						if (mysqli_affected_rows($connection) > 0) {
							header("location: login.php");
						}else{
							echo "Error in query: $query . " .mysqli_error($connection);
						exit;
						}
					}
				}
			?>
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
