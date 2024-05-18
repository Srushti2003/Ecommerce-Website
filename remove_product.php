<?php
session_start();

if (isset($_POST['productName'])) {
    $productName = $_POST['productName'];

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

    // Remove the product from the shopping cart
    $deleteSql = "DELETE FROM shopping_cart WHERE UserID = '$userID' AND Product_Name = '$productName'";
    if ($conn->query($deleteSql) === TRUE) {
        echo "Product removed successfully.";
    } else {
        echo "Error removing product: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
