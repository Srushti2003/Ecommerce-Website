<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "urbz_shopping_site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$productId = $_POST['productId'];



$sql = "DELETE FROM products_data 
        WHERE Product_ID = '$productId'";

if ($conn->query($sql) === TRUE) {
    echo "Product removed successfully";
} else {
    echo "Error updating product: " . $conn->error;
}

$conn->close();
?>
