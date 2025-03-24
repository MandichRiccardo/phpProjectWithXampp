<?php
session_start();
require_once '../header.php';
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
// Fetch invoices from the database
// ...existing code for fetching invoices...
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Elenco Fatture</title>
    <style>
        /* Add CSS styles for the invoices table */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .invoices {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        .invoices table {
            width: 100%;
            border-collapse: collapse;
        }
        .invoices th, .invoices td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .invoices th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="invoices">
        <h2>Elenco Fatture</h2>
        <table>
            <tr>
                <th>Numero Fattura</th>
                <th>Data</th>
                <th>Importo</th>
            </tr>
            <?php
            // Loop through invoices and display them in the table
            // ...existing code for displaying invoices...
            ?>
        </table>
    </div>
</body>
</html>
