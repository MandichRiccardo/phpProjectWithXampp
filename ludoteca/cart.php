<?php
session_start();
require_once '../header.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
// Fetch cart items from the session
// ...existing code for fetching cart items...
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Gestione Carrello Spesa</title>
    <style>
        /* Add CSS styles for the cart management */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .cart {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        .cart table {
            width: 100%;
            border-collapse: collapse;
        }
        .cart th, .cart td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .cart th {
            background-color: #f2f2f2;
        }
        .cart button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .cart button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="cart">
        <h2>Gestione Carrello Spesa</h2>
        <table>
            <tr>
                <th>Nome Prodotto</th>
                <th>Prezzo</th>
                <th>Quantità</th>
                <th>Totale</th>
                <th>Azioni</th>
            </tr>
            <?php
            // Loop through cart items and display them in the table
            // ...existing code for displaying cart items...
            ?>
        </table>
        <button>Effettua Acquisto</button>
    </div>
</body>
</html>
