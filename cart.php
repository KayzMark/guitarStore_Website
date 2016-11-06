<?php
session_start();
	
$page = 'index1.php';

$connection=mysqli_connect('localhost', 'root', '', 'mystore') or die('Failed to connect');



if (isset($_GET['add'])) {
	$quantity = mysqli_query($connection, 'SELECT productID, quantity FROM products WHERE productID=' . mysql_real_escape_string((int)$_GET['add']));
	while ($quantity_row = mysqli_fetch_assoc($quantity)) {
		if ($quantity_row['quantity'] != $_SESSION['cart_' . (int)$_GET['add']]) {
			$_SESSION['cart_' . (int)$_GET['add']] += 1;
		}
	}
	header('Location:' . $page);
}

if (isset($_GET['remove'])) {
	$_SESSION['cart_' . (int)$_GET['remove']]--;
	header('Location:' . $page);
}

if (isset($_GET['delete'])) {
	$_SESSION['cart_' . (int)$_GET['delete']] = '0';
	header('Location:' . $page);
}

function products() {
	$get = mysqli_query($GLOBALS['connection'], 'SELECT productID, name, price, imageName, category FROM products WHERE quantity >0 ORDER BY productID DESC');
	if (isset($_GET['add'])) {
	$quantity = mysqli_query($connection, 'SELECT productID, quantity FROM products WHERE productID=' . mysql_real_escape_string((int)$_GET['add']));
	while ($quantity_row = mysqli_fetch_assoc($quantity)) {
		if ($quantity_row['quantity'] != $_SESSION['cart_' . (int)$_GET['add']]) {
			$_SESSION['cart_' . (int)$_GET['add']] += 1;
		}
	}
		if ( ['quantity'] > 0 ){
			echo '<p><img title ="" src="../../Markus/Product/'. $get_row['imageName'] .' "height="200" width="200" alt="guitar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />' . $get_row['name'] . '<br />' . number_format($get_row['price'], 2) . '<a href="cart.php?add=' . $get_row['productID'] . '"><br/>Add to Cart</a></p>';
		} 
	}
} 
			

function paypal_items(){
	$num='0';
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
				$productID = substr($name, 5, (strlen($name) - 5));
				
				$get = mysqli_query($GLOBALS['connection'], 'SELECT productID, name, price, shipment FROM products WHERE productID=' . mysql_real_escape_string((int)$productID));
				while ($get_row = mysqli_fetch_assoc($get)) {
					$num++;
					echo '<input type="hidden" name="item_number_'.$num.'" value="'.$productID.'">';
				    echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['name'].'">';
					echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['price'].'">';
					echo '<input type="hidden" name="Shipment_'.$num.'" value="'.$get_row['shipment'].'">';
					echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
				}
			}
		}
	}
}

function cart() {
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
				$productID = substr($name, 5, (strlen($name) - 5));
				$get = mysqli_query($GLOBALS['connection'], 'SELECT productID, name, price FROM products WHERE productID=' . mysql_real_escape_string((int)$productID));
				while ($get_row = mysqli_fetch_assoc($get)) {
					$sub = $get_row['price'] * $value;
					echo $get_row['name'] . ' x ' . $value . ' @ &pound;' . number_format($get_row['price'], 2) . ' = &pound;' . number_format($sub, 2) . '<a href="cart.php?remove=' . $productID . '">&nbsp;&nbsp;<button>-</button>&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="cart.php?add=' . $productID . '"><button>+</button>&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="cart.php?delete=' . $productID. '"><button>Delete</button></a><br />';
				}
			}
			$total = @$total + @$sub;
}

	}
	if (!isset($total)) {
		echo 'Your cart is empty!';
	} else {
				echo '<p>The total is &pound;' . number_format($total, 2).'</p>';

?>
<p>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_cart">
		<input type="hidden" name="upload" value="1">
		<input type="hidden" name="business" value="ayomidemark@yahoo.com">
		<?php paypal_items(); ?>
		<input type="hidden" name="currency_code" value="GBP">
		<input type="hidden" name="amount" value="<?php echo $value; ?>">
		<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
	</form>
</p>
  <p><a href="products.php"><<</a> CONTINUE SHOPING HERE OR PROCEED TO CHECK OUT</p>
<?php
}
}
?>