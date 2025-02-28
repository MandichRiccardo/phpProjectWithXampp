<?php
require_once 'header.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .dashboard {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .dashboard h2 {
            color: #333;
        }
        .dashboard a {
            display: block;
            margin: 10px 0;
            color: #4CAF50;
            text-decoration: none;
        }
        .dashboard a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h2>Benvenuto <?php echo $_SESSION['username']; ?></h2>
        <a href="products.php">Elenco Prodotti</a>
        <a href="invoices.php">Elenco Fatture</a>
        <a href="cart.php">Gestione Carrello Spesa</a>
        <a href="purchased.php">Elenco Prodotti Acquistati</a>
    </div>
</body>
</html>
