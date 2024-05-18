<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style for the left panel */
        .left-panel {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 200px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(255, 192, 203, 0.5); /* Pink shadow */
            padding: 20px;
        }

        /* Style for the buttons */
        .left-panel button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            background-color: white; /* Pink color */
            color: black;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .left-panel button:hover {
            background-color: #951c59; /* Darker pink on hover */
        }

        /* Style for the management panels */
        .management-panel {
            margin-left: 220px; /* Adjust as needed */
            padding: 20px;
        }

        .management-panel h2 {
            margin-bottom: 10px;
        }

        .management-panel .content {
            border: none;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .management-panel .content input {
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 5px;
        }
        .management-panel .content textarea {
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .management-panel .content button {
            padding: 8px 16px;
    border: none;
    background-color: white;
    color: black;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-right: 10px; /* Adds gap between buttons */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Adds shadow to buttons */
    outline: none; /* Removes outline */
        }

        .management-panel .content select {
            padding: 8px 16px;
    border: none;
    background-color: white;
    color: black;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-right: 10px; /* Adds gap between buttons */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Adds shadow to buttons */
    outline: none; /* Removes outline */
        }
        
    </style>
</head>
<body>
    <div class="left-panel">
        <button id="homeBtn">Home Page</button>
        <button id="productBtn">Add Product</button>
        <button id="updateBtn">Update Product</button>
        <button id="delBtn">Delete Product</button>
        <button id="orderBtn">Show Orders</button>
        <button id="userBtn">Customer Data</button>
        <button id="inventoryBtn">Inventory Data</button>
    </div>

    <!-- Product Management Panel -->
    <div class="management-panel" id="productPanel">
        <div class="content">
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
                <label for="productId">Product ID:</label>
                <input type="text" id="productId" name="productId"><br><br>

                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName"><br><br>

                <label for="productImage">Product Image:</label>
                <input type="file" id="productImage" name="productImage"><br><br>

                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>

                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="girl">Girl</option>
                    <option value="boy">Boy</option>
                </select><br><br>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price"><br><br>

                <label for="productType">Product Type:</label>
                <select id="productType" name="productType">
                    <option value="mens_clothing">Mens_Clothing</option>
                    <option value="womens_clothing">Womens_Clothing</option>
                    <option value="girls_clothing">Girls_Clothing</option>
                    <option value="boys_clothing">Boys_Clothing</option>
                    <option value="mens_jwellery">Mens_Jwellery</option>
                    <option value="womens_jwellery">Womens_Jwellery</option>
                    <option value="mens_watch">Mens_Watch</option>
                    <option value="womens_watch">Womens_Watch</option>
                    <option value="mens_footwear">Mens_FootWear</option>
                    <option value="womens_footwear">Womens_FootWear</option>
                    <option value="mens_wallets_bags">Mens_Wallets_Bags</option>
                    <option value="womens_wallets_bags">Womens_Wallets_Bags</option>
                    <option value="sunglasses">Sunglasses</option>
                </select><br><br>

                <label for="categoryName">Category Name:</label>
                <select id="categoryName" name="categoryName">
                    <option value="no_category">No Category Name</option>
                    <option value="tops">Tops</option>
                    <option value="bottoms">Bottoms</option>
                    <option value="suits_and_blazers">Suits_and_Blazers</option>
                    <option value="outer_wear">Outer Wear</option>
                    <option value="active_wear">Active Wear</option>
                    <option value="swimwear">Swimwear</option>
                    <option value="accessories">Accessories</option>
                    <option value="ethinic_wear">Ethinic Wear</option>
                    <option value="ethinic_bottoms">Ethinic Bottoms</option>
                    <option value="indo_western_outfits">Indo-Western Outfits</option>
                    <option value="formal_wear">Formal Wear</option>
                    <option value="wedding_wear">Wedding Wear</option>
                    <option value="party_wear">Party Wear</option>
                    <option value="dresses">Dresses</option>
                    <option value="ethinic_dresses">Ethinic Dresses</option>
                    <option value="kurtis_or_kurtas">Kurtis_or_Kurtas</option>
                    <option value="dupattas">Dupattas</option>
                    <option value="ethinic_jackets">Ethinic Jackets</option>
                    <option value="indo_western_dresses">Indo-Western Dresses</option>
                    <option value="ethinic_tops">Ethinic Tops</option>
                    <option value="ethinic_outfits">Ethinic Outfits</option>
                    <option value="necklace">Necklace</option>
                    <option value="earrings">Earrings</option>
                    <option value="rings">Rings</option>
                    <option value="bracelets">Bracelets</option>
                    <option value="anklets">Anklets</option>
                    <option value="brooches_and_pins">Brooches and Pins</option>
                    <option value="neck_accessories">Neck Accessories</option>
                    <option value="ear_accessories">Ear Accessories</option>
                    <option value="casual_shoes">Casual Shoes</option>
                    <option value="dress_shoes">Dress Shoes</option>
                    <option value="boots">Boots</option>
                    <option value="sandals_and_flip_flops">Sandals and Flip-Flops</option>
                    <option value="athletic_shoes">Athletic Shoes</option>
                    <option value="slippers_and_house_shoes">Slippers and House Shoes</option>
                    <option value="speciality_footwear">Speciality Footwear</option>
                    <option value="ethinic_and_traditional_footwear">Ethinic and Traditional Footwear</option>
                    <option value="outdoor_and_adventure_footwear">Outdoor and Adventure Footwear</option>
                    <option value="fashion_and_statement_footwear">Fashion and Statement Footwear</option>
                    <option value="bifold_wallet">Bifold Wallet</option>
                    <option value="trifold_wallet">Trifold Wallet</option>
                    <option value="money_clip_wallet">Money Clip Wallet</option>
                    <option value="cardholder">Cardholder</option>
                    <option value="travel_wallet">Travel Wallet</option>
                    <option value="briefcase">Briefcase</option>
                    <option value="messenger_bag">Messenger Bag</option>
                    <option value="backpack">Backpack</option>
                    <option value="duffle_bag">Duffle Bag</option>
                    <option value="portfolio_bag">Portfolio Bag</option>
                    <option value="zip_around_wallet">Zip-Around Wallet</option>
                    <option value="wristlet">Wristlet</option>
                    <option value="coin_purse">Coin Purse</option>
                    <option value="checkbook_wallet">Checkbook Wallet</option>
                    <option value="tote_bag">Tote Bag</option>
                    <option value="shoulder_bag">Shoulder Bag</option>
                    <option value="crossbody_bag">Crossbody Bag</option>
                    <option value="satchel">Satchel</option>
                    <option value="hobo_bag">Hobo Bag</option>
                </select><br><br>
                
                <label for="brand">Brand Name:</label>
                <input type="text" id="brand" name="brand"><br><br>

                <label for="quantity">Quantity in Stock:</label>
                <input type="number" id="quantity" name="quantity"><br><br>

                <button type="submit" id="addProductBtn" name="addProductBtn">Add Product</button>
                <label id="display"></label>
            </form>
        </div>
    </div>


    <div class="management-panel" id="updatePanel">
        <div class="content">
        <form action="update_product.php" method="POST" enctype="multipart/form-data">
                <label for="productId">Product ID:</label>
                <input type="text" id="productId" name="productId"><br><br>

                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName"><br><br>

                <label for="productImage">Product Image:</label>
                <input type="file" id="productImage" name="productImage"><br><br>

                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>

                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="girl">Girl</option>
                    <option value="boy">Boy</option>
                </select><br><br>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price"><br><br>

                <label for="productType">Product Type:</label>
                <select id="productType" name="productType">
                    <option value="mens_clothing">Mens_Clothing</option>
                    <option value="womens_clothing">Womens_Clothing</option>
                    <option value="girls_clothing">Girls_Clothing</option>
                    <option value="boys_clothing">Boys_Clothing</option>
                    <option value="mens_jwellery">Mens_Jwellery</option>
                    <option value="womens_jwellery">Womens_Jwellery</option>
                    <option value="mens_watch">Mens_Watch</option>
                    <option value="womens_watch">Womens_Watch</option>
                    <option value="mens_footwear">Mens_FootWear</option>
                    <option value="womens_footwear">Womens_FootWear</option>
                    <option value="mens_wallets_bags">Mens_Wallets_Bags</option>
                    <option value="womens_wallets_bags">Womens_Wallets_Bags</option>
                    <option value="sunglasses">Sunglasses</option>
                </select><br><br>

                <label for="categoryName">Category Name:</label>
                <select id="categoryName" name="categoryName">
                    <option value="no_category">No Category Name</option>
                    <option value="tops">Tops</option>
                    <option value="bottoms">Bottoms</option>
                    <option value="suits_and_blazers">Suits_and_Blazers</option>
                    <option value="outer_wear">Outer Wear</option>
                    <option value="active_wear">Active Wear</option>
                    <option value="swimwear">Swimwear</option>
                    <option value="accessories">Accessories</option>
                    <option value="ethinic_wear">Ethinic Wear</option>
                    <option value="ethinic_bottoms">Ethinic Bottoms</option>
                    <option value="indo_western_outfits">Indo-Western Outfits</option>
                    <option value="formal_wear">Formal Wear</option>
                    <option value="wedding_wear">Wedding Wear</option>
                    <option value="party_wear">Party Wear</option>
                    <option value="dresses">Dresses</option>
                    <option value="ethinic_dresses">Ethinic Dresses</option>
                    <option value="kurtas_or_kurtis">Kurtas_or_Kurtis</option>
                    <option value="dupattas">Dupattas</option>
                    <option value="ethinic_jackets">Ethinic Jackets</option>
                    <option value="indo_western_dresses">Indo-Western Dresses</option>
                    <option value="ethinic_tops">Ethinic Tops</option>
                    <option value="ethinic_outfits">Ethinic Outfits</option>
                    <option value="necklace">Necklace</option>
                    <option value="earrings">Earrings</option>
                    <option value="rings">Rings</option>
                    <option value="bracelets">Bracelets</option>
                    <option value="anklets">Anklets</option>
                    <option value="brooches_and_pins">Brooches and Pins</option>
                    <option value="neck_accessories">Neck Accessories</option>
                    <option value="ear_accessories">Ear Accessories</option>
                    <option value="casual_shoes">Casual Shoes</option>
                    <option value="dress_shoes">Dress Shoes</option>
                    <option value="boots">Boots</option>
                    <option value="sandals_and_flip_flops">Sandals and Flip-Flops</option>
                    <option value="athletic_shoes">Athletic Shoes</option>
                    <option value="slippers_and_house_shoes">Slippers and House Shoes</option>
                    <option value="speciality_footwear">Speciality Footwear</option>
                    <option value="ethinic_and_traditional_footwear">Ethinic and Traditional Footwear</option>
                    <option value="outdoor_and_adventure_footwear">Outdoor and Adventure Footwear</option>
                    <option value="fashion_and_statement_footwear">Fashion and Statement Footwear</option>
                    <option value="bifold_wallet">Bifold Wallet</option>
                    <option value="trifold_wallet">Trifold Wallet</option>
                    <option value="money_clip_wallet">Money Clip Wallet</option>
                    <option value="cardholder">Cardholder</option>
                    <option value="travel_wallet">Travel Wallet</option>
                    <option value="briefcase">Briefcase</option>
                    <option value="messenger_bag">Messenger Bag</option>
                    <option value="backpack">Backpack</option>
                    <option value="duffle_bag">Duffle Bag</option>
                    <option value="portfolio_bag">Portfolio Bag</option>
                    <option value="zip_around_wallet">Zip-Around Wallet</option>
                    <option value="wristlet">Wristlet</option>
                    <option value="coin_purse">Coin Purse</option>
                    <option value="checkbook_wallet">Checkbook Wallet</option>
                    <option value="tote_bag">Tote Bag</option>
                    <option value="shoulder_bag">Shoulder Bag</option>
                    <option value="crossbody_bag">Crossbody Bag</option>
                    <option value="satchel">Satchel</option>
                    <option value="hobo_bag">Hobo Bag</option>
                </select><br><br>
                
                <label for="brand">Brand Name:</label>
                <input type="text" id="brand" name="brand"><br><br>

                <label for="quantity">Quantity in Stock:</label>
                <input type="number" id="quantity" name="quantity"><br><br>

                <button type="submit" id="updateProductBtn" name="updateProductBtn">Update Product</button>
                <label id="display"></label>
            </form>
        </div>
    </div>

    <div class="management-panel" id="delPanel">
        <div class="content">
        <form action="del_product.php" method="POST" enctype="multipart/form-data">
                <label for="productId">Product ID:</label>
                <input type="text" id="productId" name="productId"><br><br>

                <button type="submit" id="delProductBtn" name="delProductBtn">Delete Product</button>
                <label id="display"></label>
            </form>
        </div>
    </div>

    <div class="management-panel" id="orderPanel">
        <div class="content">
        <?php
// Assuming you have a database connection established
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

// SQL query to fetch order data
$sql = "SELECT * FROM orders_data"; // Modify this query based on your database structure
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the order data in HTML format
    echo '<table>';
    echo '<tr><th>Order ID</th><th>Customer ID</th><th>Order Date</th><th>Order Status</th><th>Total Amount</th><th>Shipping Details</th><th>Payment Method</th></tr>';
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

// Close the database connection
$conn->close();
?>

        </div>
    </div>


    <!-- User Management Panel -->
    <div class="management-panel" id="userPanel">
        <div class="content">
        <?php
// Assuming you have a database connection established
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

// SQL query to fetch order data
$sql = "SELECT * FROM user_admin_data"; // Modify this query based on your database structure
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the order data in HTML format
    echo '<table>';
    echo '<tr><th>Order ID</th><th>Customer ID</th><th>Order Date</th><th>Order Status</th><th>Total Amount</th><th>Shipping Details</th><th>Payment Method</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['UserID'] . '</td>';
        echo '<td>' . $row['UserName'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['Password'] . '</td>';
        echo '<td>' . $row['FullName'] . '</td>';
        echo '<td>' . $row['Address'] . '</td>';
        echo '<td>' . $row['PhoneNo'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No orders found.';
}

// Close the database connection
$conn->close();
?>
        </div>
    </div>


    <div class="management-panel" id="inventoryPanel">
    <div class="content">
        <?php
// Assuming you have a database connection established
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

// SQL query to fetch order data
$sql = "SELECT * FROM products_data"; // Modify this query based on your database structure
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the order data in HTML format
    echo '<table border="1">';
    echo '<tr><th>Product ID</th><th>Product Name</th><th>Product Image</th><th>Description</th><th>Gender</th><th>Price</th><th>Product Type</th><th>Category Name</th><th>Brand Name</th><th>Quantity in Stock</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['Product_ID'] . '</td>';
        echo '<td>' . $row['Product_Name'] . '</td>';
        $imgData = base64_encode($row['Product_Image']);
        echo '<td><img src="data:image/jpeg;base64,' . $imgData . '" alt="Product Image" width="100" height="100"></td>';
        echo '<td>' . $row['Description'] . '</td>';
        echo '<td>' . $row['Gender'] . '</td>';
        echo '<td>' . $row['Price'] . '</td>';
        echo '<td>' . $row['Product_Type'] . '</td>';
        echo '<td>' . $row['Category_Name'] . '</td>';
        echo '<td>' . $row['Brand_Name'] . '</td>';
        echo '<td>' . $row['Quantity_in_Stock'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No orders found.';
}

// Close the database connection
$conn->close();
?>
        </div>
    </div>



    <!-- JavaScript to handle button clicks and panel visibility -->
    <script>
        // Get references to the buttons and panels
        const productBtn = document.getElementById('productBtn');
        const updateproductBtn = document.getElementById('updateBtn');
        const delproductBtn = document.getElementById('delBtn');
        const userBtn = document.getElementById('userBtn');
        const orderBtn = document.getElementById('orderBtn');
        const inventoryBtn =document.getElementById('inventoryBtn');
    
        const productPanel = document.getElementById('productPanel');
        const updatePanel = document.getElementById('updatePanel');
        const delPanel = document.getElementById('delPanel');
        const userPanel = document.getElementById('userPanel');
        const orderPanel = document.getElementById('orderPanel');
        const inventoryPanel =document.getElementById('inventoryPanel');

        const homeBtn = document.getElementById('homeBtn');

        // Function to hide all panels
        function hideAllPanels() {
            productPanel.style.display = 'none';
            userPanel.style.display = 'none';
            orderPanel.style.display = 'none';
            inventoryPanel.style.display = 'none';
            updatePanel.style.display = 'none';
            delPanel.style.display = 'none';
        }

        // Initially hide all panels except Product Management
        hideAllPanels();
        productPanel.style.display = 'block'; // Display Product Management by default

        homeBtn.addEventListener('click', function() {
            window.location.href = 'index.html';
            });

        // Event listeners for button clicks
        productBtn.addEventListener('click', function() {
            hideAllPanels();
            productPanel.style.display = 'block';
        });

        userBtn.addEventListener('click', function() {
            hideAllPanels();
            userPanel.style.display = 'block';
        });

        orderBtn.addEventListener('click', function() {
            hideAllPanels();
            orderPanel.style.display = 'block';
        });

        inventoryBtn.addEventListener('click', function() {
            hideAllPanels();
            inventoryPanel.style.display = 'block';
        });

        updateproductBtn.addEventListener('click', function() {
            hideAllPanels();
            updatePanel.style.display = 'block';
        });

        delproductBtn.addEventListener('click', function() {
            hideAllPanels();
            delPanel.style.display = 'block';
        });



        const form = document.querySelector('form');
    const displayLabel = document.getElementById('display');

    form.addEventListener('submit', async (event) => {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(form); // Create FormData object to send form data
        const response = await fetch(form.action, {
            method: form.method,
            body: formData
        });

        if (response.ok) {
            const message = await response.text(); // Get the response message
            displayLabel.textContent = message; // Update the label with the message
        } else {
            displayLabel.textContent = 'Error occurred while adding product'; // Show error message if request fails
        }
    });


    </script>
</body>
</html>