<?php
include 'connection.php';

$ProductID=$_POST['ProductID'];
$ProductName=$_POST['txtProductName'] ;
$ProductPrice= $_POST['txtProductPrice'];
$Quantity= $_POST['txtQuantity'];
$Shipment= $_POST['txtShipment'];

//$ProductImage=$_POST['txtProductImage'] ;



$target_dir = "../../Markus/Product/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$ProductImage = basename($_FILES["fileToUpload"]["name"]);

if(isset($_POST["submit"])) {
	$Category = $_POST['Category'];
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				
		$query="UPDATE products SET name='$ProductName', price='$ProductPrice', quantity='$Quantity', shipment='$Shipment', category='$Category', imageName='$ProductImage' WHERE productID='$ProductID' ";
		mysqli_query($connection, $query)or die (mysqli_error());
		header( 'Location: ../../Markus/admin.php' ) ;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>