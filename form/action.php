<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>
<body>
    <?php if(isset($_POST["nome"])):?>
        <table border>
            <thead>
                <tr>
                    <td>
                        nome utente
                    </td>
                    <td>
                        password utente
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php echo $_POST["nome"];?>
                </tr>
                <tr>
                    <?php echo $_POST["password"];?>
                </tr>
            </tbody>
        </table>
    <?php endif;?>
</body>
</html>