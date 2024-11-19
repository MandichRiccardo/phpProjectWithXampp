<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>
        login
    </h1>
    <form method="get" action="./action">
        <label for="nome">inserisci il tuo nome<input type="text" name="nome" id="nome"></label>
        <br>
        <label for="numero">inserisci il numero di celle da creare <input type="number" name="numero" id="numero"></label>
        <br>
        <label for="max">inserisci il numero massimo di celle in una riga <input type="number" name="max" id="max"></label>
        <input type="submit" value="invia">
    </form>
</body>
</html>