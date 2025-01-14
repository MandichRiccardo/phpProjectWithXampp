<?php
$clienti = [
    ["nome" => "Mario", "cognome" => "Rossi", "email" => "mario.rossi@example.com", "data nascita" => "1980-01-01"],
    ["nome" => "Luigi", "cognome" => "Verdi", "email" => "luigi.verdi@example.com", "data nascita" => "1985-02-15"],
    ["nome" => "Giulia", "cognome" => "Bianchi", "email" => "giulia.bianchi@example.com", "data nascita" => "1990-03-30"]
];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>es 1</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <?php foreach($clienti[0] as $key => $value): ?>
                        <th><?php echo $key ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clienti as $cliente): ?>
                    <tr>
                        <?php foreach($cliente as $value): ?>
                            <td><?php echo $value ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>