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
$productName = $_POST['productName'];
$productImage = addslashes(file_get_contents($_FILES['productImage']['tmp_name']));
$description = $_POST['description'];
$genderLowercase = strtolower($_POST['gender']); // Get the lowercase value of the selected gender
$genderMap = [
    'men' => 'Men',
    'women' => 'Women',
    'girl' => 'Girl',
    'boy' => 'Boy'
];
$gender = isset($genderMap[$genderLowercase]) ? $genderMap[$genderLowercase] : '';
$price = $_POST['price'];
$productTypeLowercase = strtolower($_POST['productType']); // Get the lowercase value of the selected gender
$productTypeMap = [
    'mens_clothing' => 'Mens_Clothing',
    'womens_clothing' => 'Womens_Clothing',
    'girls_clothing' => 'Girls_Clothing',
    'boys_clothing' => 'Boys_Clothing',
    'mens_jwellery' => 'Mens_Jwellery',
    'womens_jwellery' => 'Womens_Jwellery',
    'mens_watch' => 'Mens_Watch',
    'womens_watch' => 'Womens_Watch',
    'mens_footwear' => 'Mens_FootWear',
    'womens_footwear' => 'Womens_FootWear',
    'mens_wallets_bags' => 'Mens_Wallets_Bags',
    'womens_wallets_bags' => 'Womens_Wallets_Bags',
    'sunglasses' => 'Sunglasses'
];
$productType = isset($productTypeMap[$productTypeLowercase]) ? $productTypeMap[$productTypeLowercase] : '';

$categoryNameLowercase = strtolower($_POST['categoryName']); // Get the lowercase value of the selected gender
$categoryNameMap = [
    'no_category' => 'No Category Name',
    'tops' => 'Tops',
    'bottoms' => 'Bottoms',
    'suits_and_blazers' => 'Suits_and_Blazers',
    'outer_wear' => 'Outer Wear',
    'active_wear' => 'Active Wear',
    'swimwear' => 'Swimwear',
    'accessories' => 'Accessories',
    'ethinic_wear' => 'Ethinic Wear',
    'ethinic_bottoms' => 'Ethinic Bottoms',
    'indo_western_outfits' => 'Indo-Western Outfits',
    'formal_wear' => 'Formal Wear',
    'wedding_wear' => 'Wedding Wear',
    'party_wear' => 'Party Wear',
    'dresses' => 'Dresses',
    'ethinic_dresses' => 'Ethinic Dresses',
    'kurtas_or_kurtis' => 'Kurtas_or_Kurtis',
    'dupattas' => 'Dupattas',
    'ethinic_jackets' => 'Ethinic Jackets',
    'indo_western_dresses' => 'Indo-Western Dresses',
    'ethinic_tops' => 'Ethinic Tops',
    'ethinic_outfits' => 'Ethinic Outfits',
    'necklace' => 'Necklace',
    'earrings' => 'Earrings',
    'rings' => 'Rings',
    'bracelets' => 'Bracelets',
    'anklets' => 'Anklets',
    'brooches_and_pins' => 'Brooches and Pins',
    'neck_accessories' => 'Neck Accessories',
    'ear_accessories' => 'Ear Accessories',
    'casual_shoes' => 'Casual Shoes',
    'dress_shoes' => 'Dress Shoes',
    'boots' => 'Boots',
    'sandals_and_flip_flops' => 'Sandals and Flip-Flops',
    'athletic_shoes' => 'Athletic Shoes',
    'slippers_and_house_shoes' => 'Slippers and House Shoes',
    'speciality_footwear' => 'Speciality Footwear',
    'ethinic_and_traditional_footwear' => 'Ethinic and Traditional Footwear',
    'outdoor_and_adventure_footwear' => 'Outdoor and Adventure Footwear',
    'fashion_and_statement_footwear' => 'Fashion and Statement Footwear',
    'bifold_wallet' => 'Bifold Wallet',
    'trifold_wallet' => 'Trifold Wallet',
    'money_clip_wallet' => 'Money Clip Wallet',
    'cardholder' => 'Cardholder',
    'travel_wallet' => 'Travel Wallet',
    'briefcase' => 'Briefcase',
    'messenger_bag' => 'Messenger Bag',
    'backpack' => 'Backpack',
    'duffle_bag' => 'Duffle Bag',
    'portfolio_bag' => 'Portfolio Bag',
    'zip_around_wallet' => 'Zip-Around Wallet',
    'wristlet' => 'Wristlet',
    'coin_purse' => 'Coin Purse',
    'checkbook_wallet' => 'Checkbook Wallet',
    'tote_bag' => 'Tote Bag',
    'shoulder_bag' => 'Shoulder Bag',
    'crossbody_bag' => 'Crossbody Bag',
    'satchel' => 'Satchel',
    'hobo_bag' => 'Hobo Bag'
];
$categoryName = isset($categoryNameMap[$categoryNameLowercase]) ? $categoryNameMap[$categoryNameLowercase] : '';

$brand = $_POST['brand'];
$quantity = $_POST['quantity'];
                       
// Retrieve other form data in a similar manner

// SQL query to insert data into the database

$sql = "INSERT INTO products_data (Product_ID, Product_Name, Product_Image, Description, Gender, Price, Product_Type, Category_Name, Brand_Name, Quantity_in_Stock) 
VALUES ('$productId', '$productName', '$productImage', '$description', '$gender', '$price', '$productType', '$categoryName', '$brand', '$quantity')";
if ($conn->query($sql) === TRUE) {
    echo "New product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
