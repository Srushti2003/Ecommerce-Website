<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Assuming the default password for XAMPP
$dbname = "urbz_shopping_site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; 
$fullname = $_POST['fullname'];
$addr = $_POST['address']; 
$phone = $_POST['phone'];
$userid = $username . substr($phone, -4);

// SQL query to insert data into the database
$sql = "INSERT INTO user_admin_data (UserID, UserName, Email, Password, FullName, Address, PhoneNo) 
VALUES ('$userid','$username','$email','$password','$fullname','$addr','$phone')";

// Execute the query and check for success
if ($conn->query($sql) === TRUE) {
    echo "New user added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    // Debugging statement to display form data received
    var_dump($_POST);
}

// Close the database connection
$conn->close();
?>
