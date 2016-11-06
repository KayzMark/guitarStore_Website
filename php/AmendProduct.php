<?php
//Make connection to database
include 'connection.php';
$ProductID = $_GET['id'];
$query = "SELECT * FROM products WHERE productID=$ProductID";
//echo $query . '<br />';

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
If (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
} else {
	$row = NULL;
}
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="main.css"/>
		<title>Result</title>
	</head>
	<body>
		<form method="post" action="UpdateProduct.php" enctype="multipart/form-data">

			<fieldset class="fieldset-width">
				<legend>
					Enter Product Details
				</legend>
				<label for="txtProductName">Product ID: </label>
				<input type="txt" name="ProductID" value="<?php echo $ProductID; ?>" />
				<br />
				<br />
				<label for="txtProductName">Product Name: </label>
				<input type="text" name="txtProductName"  value="<?php echo $row['name']; ?>"/>
				<br />
				<br />
				<label class="align" for="Category">Category: </label>
				<input type="radio" name="Category" value="Guitar"/>Guitar<input type="radio" name="Category" value="Accessory"/>Accessory</td></tr>
				<br />
				<br />
				<label for="txtProductPrice">Price: </label>
				<input type="text" name="txtProductPrice" value="<?php echo $row['price']; ?>" />
				<br />
				<br />
				<label for="txtProductImage">Existing Image Filename: </label><?php echo $row['imageName']; ?>
				<input type="file" name="fileToUpload" id="fileToUpload" />
				<br />
				<br />
				<label class="align" for="txtShipment">Shipment: </label>
				<input type="text" name="txtShipment"  value="<?php echo $row['shipment']; ?>"/>
				<br />
				<br />
				<label class="align" for="txtQuantity">Quantity: </label>
				<input type="text" name="txtQuantity"  value="<?php echo $row['quantity']; ?>"/>
				<br />
				<br />
			</fieldset>

			<input type="submit" value="Submit" name='submit' />
			<input type="reset" value="Clear" />
		</form>
	</body>
</html>