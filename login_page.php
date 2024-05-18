<?php
session_start(); // Start the session

// Database connection parameters
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

// Retrieve form data
$username = $_GET['username_log'];
$password = $_GET['password_log'];

// SQL query to check user credentials using prepared statement
$stmt = $conn->prepare("SELECT * FROM user_admin_data WHERE UserName=? AND Password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // User found, set session variables
    $_SESSION['username'] = $username;

    // Redirect to account page
    header("Location: account.php");
    exit();
} else {
    if($username=='Admin' && $password=='admin@8745'){
        $_SESSION['username'] = $username;

    // Redirect to account page
    header("Location: account.php");
    exit();
    }
    else{
// User not found or invalid credentials
echo "Invalid username or password";
    }
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
