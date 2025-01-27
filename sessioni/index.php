<?php
session_start();

if (!isset($_SESSION['athletes'])) {
    $_SESSION['athletes'] = [];
}

function contiene($array, $elemento){
    foreach($array as $el){
        if($el['nome'] == $elemento['nome'] && $el['cognome'] == $elemento['cognome'] && $el['data_nascita'] == $elemento['data_nascita'] && $el['sesso'] == $elemento['sesso'] && $el['nazionalità'] == $elemento['nazionalità']){
            return true;
        }
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $athlete = [
        'nome' => $_POST['nome'],
        'cognome' => $_POST['cognome'],
        'data_nascita' => $_POST['data_nascita'],
        'sesso' => $_POST['sesso'],
        'nazionalità' => $_POST['nazionalità'],
        'specialità' => $_POST['specialità']
    ];
    if(!contiene($_SESSION['athletes'], $athlete)){
        $_SESSION['athletes'][] = $athlete;
    }
}

$specialties = ['discesa libera', 'super-G', 'slalom gigante', 'slalom speciale', 'combinata'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Iscrizione Gara di Sci</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="radio"] {
            margin: 0 10px 0 0;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Iscrizione Gara di Sci</h1>
    <form method="post" action="">
        Nome: <input type="text" name="nome" required><br>
        Cognome: <input type="text" name="cognome" required><br>
        Data di Nascita: <input type="date" name="data_nascita" required><br>
        Sesso: 
        <input type="radio" name="sesso" value="maschio" required> Maschio
        <input type="radio" name="sesso" value="femmina" required> Femmina<br>
        Nazionalità: <input type="text" name="nazionalità" required><br>
        Specialità: 
        <select name="specialità" required>
            <?php foreach ($specialties as $specialty): ?>
                <option value="<?php echo $specialty; ?>"><?php echo $specialty; ?></option>
            <?php endforeach; ?>
        </select><br>
        <input type="submit" value="Iscriviti">
    </form>

    <form action="deleteSession">
        <input type="hidden" name="from" value="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" value="Cancella Dati">
    </form>

    <h2>Atleti Iscritti</h2>
    <?php foreach ($specialties as $specialty): ?>
        <h3><?php echo $specialty; ?></h3>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Data di Nascita</th>
                <th>Sesso</th>
                <th>Nazionalità</th>
            </tr>
            <?php foreach ($_SESSION['athletes'] as $athlete): ?>
                <?php if ($athlete['specialità'] == $specialty): ?>
                    <tr>
                        <td><?php echo $athlete['nome']; ?></td>
                        <td><?php echo $athlete['cognome']; ?></td>
                        <td><?php echo $athlete['data_nascita']; ?></td>
                        <td><?php echo $athlete['sesso']; ?></td>
                        <td><?php echo $athlete['nazionalità']; ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
    <?php endforeach; ?>
</body>
</html>
