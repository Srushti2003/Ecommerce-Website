<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalAmount = $_POST['totalAmount'];
    $paymentMethod = $_POST['paymentMethod'];
    $Address = 'Address: '. $_POST['Address'];
    $companyAddress = 'Company Address: '. $_POST['CompanyAddress'];

    $shippingAddress = $Address . "\n" . $companyAddress;

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

    $username;
    $userID;

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
    // Generate order ID
    $orderID = uniqid(); // You can use any method to generate a unique order ID

    // Fetch products from shopping cart for the user
    $fetchCartSql = "SELECT * FROM shopping_cart WHERE UserID = '$userID'";
    $result = $conn->query($fetchCartSql);

    // Check if there are shopping records for the user
    if ($result->num_rows > 0) {
        // Insert each product into the orders table and remove from the shopping cart
        while ($row = $result->fetch_assoc()) {
            $productName = $row['Product_Name'];
            $productImage = $row['Product_Image'];
            $quantity = $row['Quantity'];
            $orderDate = date('Y-m-d H:i:s');
            $orderStatus = 'Pending'; // You can set the initial order status here

            // Insert into orders table with order ID before user ID
            $insertOrderSql = "INSERT INTO orders_data (Order_ID, UserID, Product_Name, Product_Image, Order_Date, Order_Status, Total_Amt, Shipping_Details, Payment_Method) 
            VALUES ('$orderID', '$userID', '$productName', '$productImage', '$orderDate', '$orderStatus', '$totalAmount', '$shippingAddress', '$paymentMethod')";

if ($conn->query($insertOrderSql) === TRUE) {
    // Update the product quantity in the products table
    $updateProductSql = "UPDATE products_data SET Quantity_in_Stock = Quantity_in_Stock - $quantity WHERE Product_Name = '$productName'";
    $conn->query($updateProductSql);

    // Remove product from shopping cart after successful order insertion
    $deleteCartSql = "DELETE FROM shopping_cart WHERE UserID = '$userID' AND Product_Name = '$productName'";
    $conn->query($deleteCartSql);
} else {
    echo "Error inserting order: " . $conn->error;
}
        }

        echo "Order placed successfully!";
    } else {
        echo "No products in the shopping cart.";
    }

    $conn->close();
}
?>
