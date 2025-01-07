<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato della Registrazione</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(./asset/img/universe.jpg);
            background-size: cover;
            color: #fff;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }

        .styled-table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #2c2f3e;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .styled-table th, .styled-table td {
            padding: 12px 20px;
            text-align: left;
            color: #fff;
        }

        .styled-table th {
            background-color: #2c2f3e;
            color: #fff;
            font-size: 18px;
        }

        .styled-table tr:nth-child(even) {
            background-color: #3b3f51;
        }

        .styled-table tr:nth-child(odd) {
            background-color: #323647;
        }

        .styled-table tr:hover {
            background-color: #ad45ec;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .styled-table td {
            border-bottom: 1px solid #555;
        }

        h1 {
            color: #00ffff;
            font-size: 2rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Risultato della Registrazione</h1>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Campo</th>
                <th>Valore</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
                $surname = isset($_POST['surn']) ? htmlspecialchars($_POST['surn']) : '';
                $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
                $city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '';
                $dataPicker = isset($_POST['dataPicker']) ? htmlspecialchars($_POST['dataPicker']) : '';
                $residence = isset($_POST['res']) ? htmlspecialchars($_POST['res']) : '';

                echo "<tr><td>Nome</td><td>$name</td></tr>";
                echo "<tr><td>Cognome</td><td>$surname</td></tr>";
                echo "<tr><td>Genere</td><td>$gender</td></tr>";
                echo "<tr><td>Data</td><td>$dataPicker</td></tr>";
                echo "<tr><td>Città</td><td>$city</td></tr>";
                echo "<tr><td>Indirizzo di Residenza</td><td>$residence</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>