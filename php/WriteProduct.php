<?php
//Make connection to database
include 'connection.php';
//Gather from $_POST[]all the data submitted and store in variables
$ProductName = $_POST['txtProductName'];
$ProductPrice = $_POST['txtProductPrice'];
$Shipment = $_POST['txtShipment'];
$Quantity = $_POST['txtQuantity'];
//$ProductImage = $_POST['txtProductImage'];

$target_dir = "../../Markus/Product/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$ProductImage = basename($_FILES["fileToUpload"]["name"]);

// Check if image file is a actual image or fake image
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
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		
		//Construct INSERT quesry using variables holding data gathered from form
		$query = "INSERT INTO products (name, price, imageName, shipment, quantity, category)
				VALUES ('$ProductName', '$ProductPrice', '$ProductImage','$Shipment','$Quantity', '$Category')";

		//Temporarily echo $query for debugging purposes
		//echo $query;

		//run $query
		mysqli_query($connection, $query) or die(mysqli_error());
		if (mysqli_affected_rows($connection) > 0) {

			//If so , return to calling page(stored in the server variables as HTTP_REFERER

			header("Location: {$_SERVER['HTTP_REFERER']}");

		} else {

			// print error message

			echo "Error in query: $query. " . mysqli_error($connection);

			exit ;

		}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>