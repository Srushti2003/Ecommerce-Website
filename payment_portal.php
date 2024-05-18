<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Portal</title>
<style>
    form button {
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

    input[type="text"] {
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
}
</style>
</head>
<body>
<?php
session_start();

$totalAmount = 0;

if (isset($_POST['totalAmount'])) {
    $totalAmount = $_POST['totalAmount'];
}

echo '<h2>Total Amount: Rs. ' . $totalAmount . '</h2>';

// Additional payment processing code goes here

echo '<form method="post" action="payment_process.php">';
echo '<input type="hidden" name="totalAmount" value="' . $totalAmount . '">';
echo '<input type="text" name="Address" placeholder="Address" class="addr">';
echo '<input type="hidden" name="CompanyAddress" value="UrbanZ Shopping, 1234 Shopping Avenue, Cityville, State 12345, Country.">';
echo '<button type="submit" name="paymentMethod" value="UPI">Pay with UPI</button>';
echo '<button type="submit" name="paymentMethod" value="NetBanking">Pay with Net Banking</button>';
echo '<button type="submit" name="paymentMethod" value="COD">Cash on Delivery</button>';
echo '</form>';

?>
</body>
</html>
