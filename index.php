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
                        $ret["$file"] = scanDirectory("$directory/$file");
                    }else{
                        array_push($ret, "$file");
                    }
                }
            }
            closedir($dir);
        }catch(Error $e){}
        return $ret;
    }

    function printlnd($line, $deep = 0, $name){
        if(gettype($line) == 'array' || gettype($line) == 'object'){
            echo "$name-->{<br>";
            foreach($line as $i => $value){
                unset($j);
                for($j = 0;$j<=$deep;$j++){
                    echo "&nbsp;&nbsp;";
                }
                printlnd($value, $deep+1, $i);
            }
            unset($j);
            for($j = 0;$j<$deep;$j++){
                echo "&nbsp;&nbsp;";
            }
            echo "}<br>";
        }else{
            try{
                echo "$line(" . gettype($line) . ")";
            }catch(Error $e){
                echo "Errore: " . $e->getMessage();
                echo gettype($line);
            }
            echo "<br>";
        }
    }

    function println($line){
        printlnd($line, 0, name: "");
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