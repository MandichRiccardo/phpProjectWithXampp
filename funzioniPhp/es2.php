<?php
    function estrai($parola, $punteggiatura = [' ', '.', ',', ';', ':', '!', '?', '-', '_', '(', ')', '[', ']', '{', '}', '"', "'", '<', '>', '/', '\\', '|', '@', '#', '$', '%', '^', '&', '*', '+', '=', '~', '`']){
        foreach(explode($punteggiatura[0], $parola) as $p){
            $paroleTemp = estrai($p, array_remove($punteggiatura, $punteggiatura[0]));
            foreach($paroleTemp as $parola){
                array_push($parole, $parola);
            }
        }
    }
?>
foreach($punteggiatura as $p){
    $paroleTemp = explode($p, $_GET["stringa"]);
    foreach($paroleTemp as $parola){
        array_push($parole, $parola);
    }
}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>e2</title>
    </head>
    <body>
        <?php if(isset($_GET["stringa"])):?>
            <?php 
                $caratteri = str_split($_GET["stringa"]);
                $vocali = 0;
                $consonanti = 0;
                foreach($caratteri as $c){
                    if(ctype_alpha($c)){
                        if(in_array(strtolower($c), ["a", "e", "i", "o", "u"])){
                            $vocali++;
                        }else{
                            $consonanti++;
                        }
                    }
                }
            ?>
            in questa stringa ci sono <?php echo $vocali ?> vocali e <?php echo $consonanti ?> consonanti
            <?php
                $frequenza = [];
                foreach($caratteri as $c){
                    if(ctype_alpha($c)){
                        $c = strtolower($c);
                        if(isset($frequenza[$c])){
                            $frequenza[$c]++;
                        }else{
                            $frequenza[$c] = 1;
                        }
                    }
                }
                $doppie = 0;
                foreach($frequenza as $c){
                    if($c > 1){
                        $doppie++;
                    }
                }
            ?>
            <br>
            in questa stringa ci sono <?php echo $doppie ?> lettere ripetute
            <?php
            $numeri = 0;
                foreach($caratteri as $c){
                    if(ctype_digit($c)){
                        $numeri++;
                    }
                }
            ?>
            <br>
            in questa stringa ci sono <?php echo $numeri ?> numeri
            <?php
                foreach($frequenza as $c => $f){
                    if($f > 1){
                        echo "<br>la lettera $c si ripete $f volte";
                    }
                }
                $parole = estrai(implode($caratteri));
            ?>
            <br>
            in questa stringa ci sono <?php echo count($parole) ?> parole
        <?php else: ?>
            <form action="es2">
                <input type="text" name="stringa" value="<?php echo $_GET["stringa"] ?>">
                <input type="submit" value="Invia">
            </form>
        <?php endif; ?>
    </body>
</html>