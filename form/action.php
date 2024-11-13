<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>
<body>
    <?php if(isset($_POST["nome"])):?>
        nome:<?php echo $_POST["nome"];?>
        password:<?php echo $_POST["password"];?>
    <?php endif;?>
</body>
</html>