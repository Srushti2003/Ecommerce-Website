<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="account_css.css">
    <title>Account Page</title>
    <style>
        .adminPanel {
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
<header class="panel-nav">
        <nav class="nav-bar">
            <img src="logo.png" height="100px"/>
            
            <a href="index.html">HOME</a>
            <!--<a href="#">CATEGORIES</a>-->
            <div class="dropdown">
                <button class="dropbtn">CATEGORIES</button>
                <div class="dropdown-content">
                <a href="mens_wear.php">Men's Wear</a>
                    <a href="womens_wear.php">Women's Wear</a>
                    <a href="girls_wear.php">Girls's Wear</a>
                    <a href="boys_wear.php">Boys's Wear</a>
                    <a href="womens_jwellery.php">Women's Jwellery</a>
                    <a href="mens_jwellery.php">Men's Jwellery</a>
                    <a href="mens_watch.php">Men's Watch</a>
                    <a href="womens_watch.php">Women's Watch</a>
                    <a href="mens_footwear.php">Men's Foot Wear</a>
                    <a href="womens_footwear.php">Women's Foot Wear</a>
                    <a href="sunglasses.php">Sunglasses</a>
                    <a href="mens_wallets_and_bags.php">Men's Wallets and Bags</a>
                    <a href="womens_wallets_and_bags.php">Women's Wallets and Bags</a>
                </div>
            </div>
            <a href="login or signup.html">LOGIN</a>
            <a href="account.php">ACCOUNT</a>
            <a href="about.html">ABOUT</a>
            <a href="shopping_cart.php"><img src="shopping-cart-fill.png"/></a>
        </nav>
    </header>
    <main>
    <?php
        session_start(); // Start the session

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
       

$username;
$userID;
$totalAmount = 0; // Initialize total amount

// Display user ID if logged in
if (isset($_SESSION['username'])) {
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
        
    } 
    $stmt->close(); // Close the prepared statement
} 


        if (isset($_SESSION['username'])) {
            if ($_SESSION['username'] == 'Admin') {
                echo "<h1>Hello, Admin</h1>";
                echo "<p>You have admin privileges.</p>";
            } else {
                echo "<h1>Welcome, " . $_SESSION['username'] . "</h1>";
            }
        } else {
            echo "<h1>Account Page</h1>";
            echo "<p>You are not logged in. Please log in to access your account.</p>";
        }

        if (isset($_SESSION['username']) && $_SESSION['username'] == 'Admin') {
            $isAdmin = true;
        } else {
            $isAdmin = false;
        }

        if ($isAdmin):
                echo '<a href="admin_panel.php" class="admin-btn"><button class="adminPanel">Admin Panel</button></a>';
        endif; 


        if (isset($_SESSION['username']) && $_SESSION['username'] != 'Admin') {
            $sql = "SELECT * FROM orders_data WHERE UserID = '$userID'"; // Modify this query based on your database structure
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the order data in HTML format
    echo '<table border="1">';
    echo '<tr><th>Order ID</th><th>User ID</th><th>Order Date</th><th>Order Status</th><th>Total Amount</th><th>Shipping Details</th><th>Payment Method</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['Order_ID'] . '</td>';
        echo '<td>' . $row['UserID'] . '</td>';
        echo '<td>' . $row['Order_Date'] . '</td>';
        echo '<td>' . $row['Order_Status'] . '</td>';
        echo '<td>' . $row['Total_Amt'] . '</td>';
        echo '<td>' . $row['Shipping_Details'] . '</td>';
        echo '<td>' . $row['Payment_Method'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No orders found.';
}
        }
        
        ?>
    </main>
    <footer>
        <!-- Your footer content -->
    </footer>
</body>
</html>
