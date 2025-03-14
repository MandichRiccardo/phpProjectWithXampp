<?php
session_start();
require_once '../header.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
// Fetch products from the database
// ...existing code for fetching products...
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Elenco Prodotti</title>
    <style>
        /* Add CSS styles for the products table */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .products {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        .products table {
            width: 100%;
            border-collapse: collapse;
        }
        .products th, .products td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .products th {
            background-color: #f2f2f2;
        }
        .products a {
            color: #4CAF50;
            text-decoration: none;
        }
        .products a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="products">
        <h2>Elenco Prodotti</h2>
        <table>
            <tr>
                <th>Nome Prodotto</th>
                <th>Prezzo</th>
                <th>Dettaglio</th>
            </tr>
            <?php
            // Loop through products and display them in the table
            // ...existing code for displaying products...
            ?>
        </table>
    </div>
</body>
</html>
