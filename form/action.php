<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>
<body>
    <?php if(isset($_GET["nome"])):?>
        <table border>
            <tbody>
                <?php $i=0;
                while($i<$_GET["numero"]):?>
                    <tr>
                    <?php $colonna = 0;
                    while($colonna<5 && $i<$_GET["numero"]):?>
                    <td>
                        <?php echo $i;
                        $i++;
                        $colonna++?>
                    </td>
                    <?php endwhile;?>
                    </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    <?php endif;?>
    
</body>
</html>