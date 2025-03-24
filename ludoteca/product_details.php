<?php
session_start();
require_once '../header.php';
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
// Fetch product details from the database
// ...existing code for fetching product details...
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dettagli Prodotto</title>
    <style>
        /* Add CSS styles for the product details */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .product-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .product-details h2 {
            color: #333;
        }
        .product-details p {
            margin: 10px 0;
        }
        .product-details button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .product-details button:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        // Add JavaScript for PDF printing
        function printPDF() {
            window.print();
        }
    </script>
</head>
<body>
    <div class="product-details">
        <h2>Dettagli Prodotto</h2>
        <!-- Display product details here -->
        <!-- ...existing code for displaying product details... -->
        <button onclick="printPDF()">Stampa PDF</button>
    </div>
</body>
</html>
