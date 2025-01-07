<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo di Registrazione</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("./asset/img/blackhole-wallpaper.webp");
            background-size: cover;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #00ffff;
            text-align: center;
        }
        form {
            background: green;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #600499;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #ad45ec;
        }
        select {
            margin-bottom: 10px;
            margin-top: 10px;
            font-family: cursive, sans-serif;
            outline: 0;
            background: #ad45ec;
            color: #fff;
            border: 1px solid crimson;
            padding: 4px;
            border-radius: 9px;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Modulo di Registrazione</h1>
    <form action=".\action.php" method="post" onsubmit="return validateForm(event)">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" onfocus="clearError('name')" onblur="validateField('name')"><br>
        <div id="name-error" class="error"></div>

        <label for="surn">Cognome:</label><br>
        <input type="text" id="surn" name="surn" onfocus="clearError('surn')" onblur="validateField('surn')"><br>
        <div id="surn-error" class="error"></div>

        <label for="gender">Genere:</label>
        <select name="gender" id="gender" onfocus="clearError('gender')" onblur="validateField('gender')">
            <option value="select">Seleziona un genere</option>
            <option value="MASCHIO">MASCHIO</option>
            <option value="FEMMINA">FEMMINA</option>
            <option value="NON DEFINITO">NON DEFINITO</option>
            <option value="ELICOTTERO DA ATTACCO">ELICOTTERO DA ATTACCO</option>
        </select>
        <br>
        <div id="gender-error" class="error"></div>

        <label for="dataPicker">Data:</label><br>
        <input type="text" name="dataPicker" id="dataPicker" onblur="validateField('dataPicker')"><br>
        <div id="dataPicker-error" class="error"></div>

        <label for="city">Città:</label><br>
        <input type="text" id="city" name="city" onfocus="clearError('city')" onblur="validateField('city')"><br>
        <div id="city-error" class="error"></div>

        <label for="res">Indirizzo di Residenza:</label><br>
        <input type="text" id="res" name="res" onfocus="clearError('res')" onblur="validateField('res')"><br>
        <div id="res-error" class="error"></div>

        <input type="submit" value="Invia"><br>
    </form>

    <div id="warning-message" class="warning"></div>
        
    <script src="./script.js"></script>
    <script src="./popup.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#dataPicker").datepicker()
    });
    </script>
</body>
</html>