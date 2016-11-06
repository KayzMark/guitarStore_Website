<?php 

session_start();

if (isset($_GET['add'])) {
	$quantity = mysqli_query($connection, 'SELECT productID, quantity FROM products WHERE productID=' . mysql_real_escape_string((int)$_GET['add']));
	while ($quantity_row = mysqli_fetch_assoc($quantity)) {
		if ($quantity_row['quantity'] != $_SESSION['cart_' . (int)$_GET['add']]) {
			$_SESSION['cart_' . (int)$_GET['add']] += 1;
		}
	}
	header('Location:' . $page);
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
}function cart() {
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
	}
}

?>