<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Cart</title>
<style>
    /* CSS for the shopping panel */
    .shopping-panel {
        display: flex;
        flex-wrap: wrap;
    }
    .product {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Adding shadow */
    }

    .remove_btn {
        padding: 8px 16px;
    border: none;
    background-color: white;
    color: black;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-right: 10px; /* Adds gap between buttons */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Adds shadow to buttons */
    outline: none;
    }

    .checkout_btn {
        padding: 8px 16px;
    border: none;
    background-color: white;
    color: black;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-right: 10px; /* Adds gap between buttons */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Adds shadow to buttons */
    outline: none;
    }
</style>
</head>
<body>
<?php
session_start();

$username;
$userID;
$totalAmount = 0; // Initialize total amount

// Display user ID if logged in
if (isset($_SESSION['username'])) {
    echo '<h2>Shopping Cart</h2>';
    $username = $_SESSION['username'];

    // Assuming you have a database connection established
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "urbz_shopping_site";

    // Create connection
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute a query to fetch the user ID based on username
    $sql = "SELECT UserID FROM user_admin_data WHERE UserName = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a row is returned
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userID = $row['UserID'];
        
    } else {
        // Handle case where user ID is not found
        echo "User ID not found.";
    }

    $stmt->close(); // Close the prepared statement
} else {
    echo 'You are not logged in';
}

$productName = "";

// Retrieve the product name from the URL query parameter
if (isset($_POST['name'])) {
    $productName = $_POST['name'];
} 

$quantity = 0;
if (isset($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
} 


$unitPrice = 0;
if (isset($_POST['price'])) {
    $unitPrice = $_POST['price'];
    $unitPrice = str_replace('Price: ', '', $unitPrice);
} 


$totalPrice = $quantity * (int)$unitPrice;
$createdAt = date('Y-m-d H:i:s');

$productImage = '';

if (isset($_POST['image'])) {
    $productImage = $_POST['image'];
} 

// Check if the product is already in the cart
$cartKey = $userID . '_' . $productName . '_' . $quantity; // Include quantity in the cart key
if (isset($_SESSION['cart'][$cartKey])) {
    // If product with same name and quantity exists, update the quantity
    $_SESSION['cart'][$cartKey]['quantity'] += $quantity;
    echo "Product quantity updated in the cart.";
} else {
    // Add the product to the session cart and database
    $_SESSION['cart'][$cartKey] = array(
        'productName' => $productName,
        'quantity' => $quantity,
        'unitPrice' => $unitPrice,
        'totalPrice' => $totalPrice,
        'productImage' => $productImage
    );

    if ($userID && $productName && $productImage && $quantity && $unitPrice && $totalPrice && $createdAt) {
        $sql = "INSERT INTO shopping_cart (UserID, Product_Name, Product_Image, Quantity, Unit_Price, Total_Price, Created_At) 
        VALUES ('$userID', '$productName', '$productImage', '$quantity', '$unitPrice', '$totalPrice', '$createdAt')";
        if ($conn->query($sql) === TRUE) {
            echo $username . " has added the product to the cart";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$fetchSql = "SELECT * FROM shopping_cart WHERE UserID = '$userID'";
$result = $conn->query($fetchSql);

// Check if there are shopping records for the user
if ($result->num_rows > 0) {
    // Output the products in a dynamically created panel
    echo '<div class="shopping-panel">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="product">';
        // Display product image if available (assuming image URL is stored in database)
        if (!empty($row['Product_Image'])) {
            echo '<img src="' . $row['Product_Image'] . '" alt="Product Image">';
        }
        echo '<h3>' . $row['Product_Name'] . '</h3>';
        echo '<p>Quantity: ' . $row['Quantity'] . '</p>';
        echo '<p>Unit Price: ' . $row['Unit_Price'] . '</p>';
        echo '<p>Total Price: ' . $row['Total_Price'] . '</p>';
        echo '<form method="post" action="remove_product.php">';
        echo '<input type="hidden" name="productName" value="' . $row['Product_Name'] . '">';
        echo '<input type="submit" value="Remove" class="remove_btn">';
        echo '</form>';
        echo '</div>';
        
        // Calculate total amount
        $totalAmount += $row['Total_Price'];
    }
    echo '</div>';

    // Add checkout button
    echo '<form method="post" action="payment_portal.php">';
    echo '<input type="hidden" name="totalAmount" value="' . $totalAmount . '">';
    echo '<input type="submit" value="Checkout" class="checkout_btn">';
    echo '</form>';
} else {
    echo 'No shopping records found.';
}

// Close the database connection
$conn->close();
?>
</body>
</html>
