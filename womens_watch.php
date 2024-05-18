<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="men_css.css">
  <title>Home Page</title>
  <style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
  
.panel-nav {
    background-color: #fff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 10px 20px;
}
  
header {
    padding: 10px 20px;
}
  
.nav-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
  
.nav-bar img {
    margin-right: 10px;
}
  
.nav-bar a {
    text-decoration: none;
    color: #333;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
  
.nav-bar a:hover {
    background-color: #f0f0f0;
}
  
.search-container {
    display: flex;
    align-items: center;
}
  
.search-container input[type="text"] {
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
}
  
.search-container button {
    border: none;
    background-color: transparent;
    cursor: pointer;
}
  
.search-container button img {
    vertical-align: middle;
}

/* Dropdown styles */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s ease;
}

.dropdown-content a:hover {
    background-color: #f0f0f0;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Style the dropdown button */
.dropbtn {
    background-color: transparent;
    color: #333;
    border: none;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.dropbtn:hover {
    background-color: #f0f0f0;
}

/* Styling for the horizontal panel */
.horizontal-panel {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f0f0f0;
    padding: 10px;
  }

  /* Styling for the buttons */
  .horizontal-panel button {
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

  .horizontal-panel button:hover {
    background-color: #ba2a75;
  }

  .product-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 20px;
}

.product {
    width: 200px;
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    text-align: center;
}


.product button {
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

.product button:hover {
    background-color: #ba2a75;
}

.product-info button {
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

.product-info button:hover {
    background-color: #ba2a75;
}

.dynamic-panel button {
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

.dynamic-panel button:hover {
    background-color: #ba2a75;
}

.product-info form input[type="number"] {
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

/* Additional style for dynamic panel */
.dynamic-panel {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.dynamic-panel img {
    max-width: 100%;
    height: auto;
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
    <div class="product-container">
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
// Fetch products from the database (modify this query as per your database structure)
$sql = "SELECT * FROM products_data WHERE Product_Type = 'Womens_Watch' AND Gender = 'Women'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the products in HTML format
    while ($row = $result->fetch_assoc()) {
        echo '<div class="product">';
        // Displaying the image using base64 encoding
        $imageData = base64_encode($row['Product_Image']);
        echo '<img src="data:image/jpeg;base64,' . $imageData . '" alt="' . $row['Product_Name'] . '" style="max-width: 100%; height: auto;">';
        echo '<h3>' . $row['Product_Name'] . '</h3>';
        echo '<p>Price: ' . $row['Price'] . '</p>';
        echo '<button type="submit">View Product</button>';
        echo '</div>';
    }
} else {
    echo 'No products found.';
}
?>
        </div>
        <!-- Dynamic panel for displaying product info -->
        <div class="dynamic-panel" id="productInfoPanel">
            <div class="product-info">

                <h3 id="productName" name="productName"></h3>
                <p id="productPrice" name="productPrice"></p>
                <img id="productImage" src="" alt="Product Image" name="productImage">
                <form method="post" id="addToCartForm" action="shopping_cart.php">
          <input type="hidden" id="image" name="image">
          <input type="hidden" id="name" name="name">
          <input type="hidden" id="price" name="price">
          <input type="number" id="quantity" name="quantity" placeholder="Quantity" required>
          <button type="button" onclick="addToCart()">Add To Cart</button>
        </form>

            </div>
            <button id="closeButton">Close</button>
        </div>
    </main>
    <footer></footer>
    <script>
        const productInfoPanel = document.getElementById('productInfoPanel');
        const closeButton = document.getElementById('closeButton');
        productInfoPanel.style.display = 'none';

        // Function to show product info
        function showProductInfo(name, price, image) {
            // Get elements from the dynamic panel
            var productName = document.getElementById("productName");
            var productPrice = document.getElementById("productPrice");
            var productImage = document.getElementById("productImage");

            // Set the product info in the dynamic panel
            productName.textContent = name;
            productPrice.textContent = "Price: " + price;
            productImage.src = image;

            // Show the dynamic panel
            productInfoPanel.style.display = "block";
        }

        // Close button event listener
        closeButton.addEventListener('click', () => {
            productInfoPanel.style.display = 'none';
        });

        // Attach event listeners to "View Product" buttons
        const viewProductButtons = document.querySelectorAll('.product button');
        viewProductButtons.forEach(button => {
            button.addEventListener('click', () => {
                const product = button.closest('.product');
                const productName = product.querySelector('h3').textContent;
                const productPrice = product.querySelector('p').textContent.replace('Price: ', '');
                const productImage = product.querySelector('img').src;
                showProductInfo(productName, productPrice, productImage);
            });
        });


        function addToCart() {
    // Get the product details
    const productName = document.getElementById('productName').textContent;
    const productPrice = document.getElementById('productPrice').textContent;
    const productImage = document.getElementById('productImage').src;
    const quantity = document.getElementById('quantity').value; // Get quantity

    // Set the values of hidden input fields in the form
    document.getElementById('name').value = productName;
    document.getElementById('price').value = productPrice;
    document.getElementById('image').value = productImage;
    document.getElementById('quantity').value = quantity; // Set quantity in the form

    // Submit the form
    document.getElementById('addToCartForm').submit();
}


    </script>
</body>
</html>
