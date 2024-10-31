<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>palindromo
        </title>
    </head>
    <?php
        function palindromo(string $stringa){
            $n = str_split($stringa);
            $i = 0;
            $result = true;
            while($i<count($n)){
                if($n[$i] !== $n[count($n)-1-$i]){
                    $result = false;
                }
                $i++;
            }
            return $result;
        }
        ?>
        <form action="palindromo">
            <input type="text" value="<?php echo $_GET["palindromo"]?>" name="palindromo" id="palindromo">
            <input type="submit" value="controlla">
        </form>
        <?php
        if(isset($_GET["palindromo"])){
            echo $_GET["palindromo"].(palindromo($_GET["palindromo"])?"":" non")." è palindromo";
        }
    ?>
</html>