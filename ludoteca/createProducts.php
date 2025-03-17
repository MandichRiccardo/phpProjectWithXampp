<?php
require_once "../header.php";



if (isset($_POST['product_name'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];

    $sql = "INSERT INTO products (name, price, description) VALUES ('$product_name', $product_price, '$product_description')";

    if ($GLOBALS["conn"]->query($sql) === TRUE) {
        echo "New product added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Add a New Product</h1>
    <form action="createProducts.php" method="post">
        <label for="product_name">nome prodotto:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>
        <label for="product_price">prezzo del prodotto:</label>
        <input type="text" id="product_price" name="product_price" required><br><br>
        <label for="product_description">descrizione del prodotto:</label>
        <textarea id="product_description" name="product_description" required></textarea><br><br>
        <input type="submit" value="Add Product">
    </form>
</body>
</html></form></body></head>