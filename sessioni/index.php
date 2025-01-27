<?php
session_start();

if (!isset($_SESSION['athletes'])) {
    $_SESSION['athletes'] = [];
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
    $_SESSION['athletes'][] = $athlete;
}

$specialties = ['discesa libera', 'super-G', 'slalom gigante', 'slalom speciale', 'combinata'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Iscrizione Gara di Sci</title>
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

    <h2>Atleti Iscritti</h2>
    <?php foreach ($specialties as $specialty): ?>
        <h3><?php echo $specialty; ?></h3>
        <table border="1">
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
