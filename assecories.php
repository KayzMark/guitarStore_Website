<?php
include_once'cart.php';
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

	<body>
	<header>
	<div  class="active">
  		<?php
			 
			 if (isset($_SESSION["valid_user"])){
				echo "<h3>Welcome " . $_SESSION["valid_user"] . "</h3>"; echo "<p><a href=\"../Markus/php/logout.php\">LOGOUT</a></p><br /><a href=\"cart.index1.phpcart()\"><img src =\"../Markus/images/cartimg.jpg\" width=\"40px\" height=\"40px\"></a>";
			} else if (isset($_SESSION["valid_admin"])) {
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
				<a href="contact.php">CONTACT US</a>
					<?php if (!isset($_SESSION["valid_admin"])) { ?> 
			
				<li><a href="login.php">LOGIN</a></li>
				<?php } ?>
				
				<?php if (isset($_SESSION["valid_admin"])) { ?> 
				<li><a href="admin.php"><img src="images/admin.jpg" alt="admin"></a></li>
				<?php } ?>
			</ul>
		</header>
	<div id="container" class="one_third">
<?php
    
$connection = mysqli_connect('localhost', 'root', '', 'mystore') or die(mysqli_error());

if (isset($_GET['add'])) {
	$quantity = mysqli_query($connection, 'SELECT productID, quantity FROM products WHERE productID=' . mysql_real_escape_string((int)$_GET['add']));
	while ($quantity_row = mysqli_fetch_assoc($quantity)) {
		if ($quantity_row['quantity'] != $_SESSION['cart_' . (int)$_GET['add']]) {
			$_SESSION['cart_' . (int)$_GET['add']] += 1;
		}
	}
	header('Location:' . $page);
}
     $query="SELECT * FROM products where category = 'Accessory'";
	 if(isset($_GET['sort'])){
	 //echo query;
	 }
	 $result= mysqli_query($connection, $query) or die(mysqli_error());
	 echo'<table border="0">';
	 echo '<tr>';
	 $count=0;
	 while ($row = mysqli_fetch_assoc($result)) {
		 if($count%5==0){
			 echo"</tr>";
			 echo"<tr>";
		 }
		 echo '<td><img " src="../Markus/Product/'.$row['imageName'] .' "height="290px auto" width="250px auto" alt="guitar" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <br/>' . $row['name'].'&nbsp;&nbsp;<br/>$' . $row['price'].'<br/><a href="cart.php?add='.$row['productID'] .'"><button>Add To Cart</button></a></td>';
		 
		 $count++;
	 }
	 echo '</table>';
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
			<li><a href="http://facebook.com"><img src="images/facebook.jpg" alt="admin"></a></li>
			<li><a href="http://instagram.com"><img src="images/instagram.jpg" alt="admin"></a></li>
			<li><a href="http://twitter.com"><img src="images/twitter.jpg" alt="admin"></a></li>
			<li><a href="http://googleplus.com"><img src="images/google.jpg" alt="admin"></a></li>
			</ul>
		</div>
	</footer>
</html>
