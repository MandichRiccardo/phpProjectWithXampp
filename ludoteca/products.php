<?php
session_start();
require_once '../header.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
$prodotti = [];
$result = $GLOBALS["conn"]->query("select * from products");
while($line = $result->fetch_assoc()){
    array_push($prodotti, $line);
}
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
<body class="products">
    <div class="products">
        <h2>Elenco Prodotti</h2>
        <table class="products">
            <thead>
                <tr>
                    <th class="products">Nome Prodotto</th>
                    <th class="products">Prezzo</th>
                    <th class="products">Dettaglio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($prodotti as $prodotto):?>
                    <td class="products">
                        <?php echo $prodotto["name"];?>
                    </td>
                    <td class="products">
                        <?php echo $prodotto["price"];?>
                    </td>
                    <td class="products">
                        <?php echo $prodotto["description"];?>
                    </td>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>
