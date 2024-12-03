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
                echo "$directory/$file<br>";
                if ($file != '.' && $file != '..') {
                    if(is_dir("$directory/$file")){
                        array_push($ret, scanDirectory("$directory/$file"));
                    }else{
                        echo "$directory/$file<br>";
                        array_push($ret, "<a href=\"/<?php echo $directory/$file?>\"><?php echo $directory/$file?></a>");
                    }
                }/**/
            }
            closedir($dir);
        }catch(Error $e){}
        return $ret;
    }

    $file = scanDirectory(".");
?>
<body>
    <ul>
        <?php ?>
    </ul>
</body>
</html>