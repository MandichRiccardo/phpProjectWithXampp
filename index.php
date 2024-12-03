<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<?php
    function scanDirectory($directory){
        $ret = [];
        $dir = @opendir($directory);
        try{
            while (($file = readdir($dir)) !== false) {
                if ($file != '.' && $file != '..') {
                    if(is_dir("$directory/$file")){
                        array_push($ret, scanDirectory("$directory/$file"));
                    }else{
                        array_push($ret, "<a href=\"$directory/$file\">$directory/$file</a>");
                    }
                }/**/
            }
            closedir($dir);
        }catch(Error $e){}
        return $ret;
    }

    function printlnd($line, $deep){
        if(gettype($line) == 'array'){
            echo "{<br>";
            foreach($line as $i => $value){
                unset($j);
                for($j = 0;$j<=$deep;$j++){
                    echo "&nbsp;&nbsp;";
                }
                //assegno a dir la cartella di appartenenza del file in questione
                echo "$i-->";
                printlnd($value, $deep+1);
            }
            unset($j);
            for($j = 0;$j<$deep;$j++){
                echo "&nbsp;&nbsp;";
            }
            echo "}<br>";
        }else{
            preg_match("/>.*</", $line, $contenuto);
            $contenuto = str_replace("<", "", $contenuto[0]);
            $contenuto = str_replace(">", "", $contenuto);
            $contenuto = preg_replace("/^.*\//", "", $contenuto);
            echo $contenuto;
            echo "<br>";
        }
    }

    function println($line){
        printlnd($line, 0);
    }

    $file = scanDirectory(".");
    println($file);
?>
<body>
    <ul>
        <?php ?>
    </ul>
</body>
</html>