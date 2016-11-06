<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Guitar Store</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Markus" />
		<meta name="viewport" content="width-device, initial-scale=1.0">
		<meta name="description" content="E-Commerce" />
		<link href="css/admin.css" rel="stylesheet">
	</head>
	<script type="text/javascript">
function remove(id)
{
	if(confirm(' Sure to remove file ? '))
	{
		window.location='delete.php?remove_id=+id';
	}
}
</script>
	<body>
	<header>
		<div class="active">
		
		<?php
			session_start();
			if (!isset($_SESSION["valid_admin"])) {
				header("location: adminlogin.php");
			}
			echo "<h3>Welcome " . $_SESSION["valid_admin"] . "</h3>"; echo "<p><a href=\"../Markus/php/logout.php\">LOGOUT</a></p>";
			?>
		
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="products.php">PRODUCTS</a></li>
			</ul>
		</header>
		<div id="container" class="one_third">
		<?php
		//Make connection to database
		include '../Markus/php/connection.php';
		//Display heading
		echo '<h2><a href="admin.php">Manage Products</a></h2>';
		//run query to select all records from customer table
		//store the result of the query in a variable
		$query="SELECT * FROM products";
		if (isset($_GET['sort'])){
			$query=$query." ORDER BY ".$_GET['sort'];
			//echo $query;
		}
		$result = mysqli_query($connection, $query) or die(mysqli_error());
		echo '<table><tr><th>Product Name</th><th>Price</th><th>Image</th><th>Amend</th><th>Delete</th></tr>';

		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['price'] . '</td>';
			echo '<td><img src="../Markus/Product/'.$row['imageName'].'"  width="200px" height="200px"/></td>';
			echo '<td><a href="../Markus/php/AmendProduct.php?id=' . $row['productID'] . '">Amend</a></td>';
		    echo '<td><a href="../Markus/php/DeleteProduct.php?id=' . $row['productID'] . '">Delete</a></td>';
		
		echo '</tr>';
		}
		echo '</table>';
		?>
		</div>
		<p>
			<form method="post" action="../Markus/php/WriteProduct.php"  enctype="multipart/form-data">
				<fieldset class="fieldset-width1">
					<legend>
						Enter New Product Details
					</legend>
					<label class="align" for="txtProductName">Product Name: </label>
					<input type="text" name="txtProductName"  />
					<br />
					<br />
					<label class="align" for="Category">Cartegory: </label>
					<input type="radio" name="Category" value="Guitar"/>Guitar<input type="radio" name="Category" value="Accessory"/>Accessory</td></tr>
					<br />
					<br />
					<label class="align" for="txtShipment">Shipment: </label>
					<input type="text" name="txtShipment"  />
					<br />
					<br />
					<label class="align" for="txtQuantity">Quantity: </label>
					<input type="text" name="txtQuantity"  />
					<br />
					<br />
					<label class="align"for="txtProductPrice">Price: </label>
					<input type="text" name="txtProductPrice"  />
					<br />
					<br />
					<label class="align" for="txtProductImage">Image Filename: </label>
					<input type="file" name="fileToUpload" id="fileToUpload">
					<br />
					<br />
					<input type="submit" value="Submit" name='submit' />
					<input type="reset" value="Clear" />
			</form>
		</p>
	</body>
</html>