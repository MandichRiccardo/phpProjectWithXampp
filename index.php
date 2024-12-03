<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<?php
    function scanDirectory($directory){
        $dir = @opendir($directory);
        try{
            while (($file = readdir($dir)) !== false) {
                echo "$directory/$file<br>";
                if ($file != '.' && $file != '..') {
                    if(is_dir("$directory/$file")){
                        scanDirectory("$directory/$file");
                    }else{
                        ?>
                        <li>
                            <a href="/<?php echo $directory/$file?>"><?php echo $directory/$file?></a>
                        </li>
                        <?php
                    }
                }/**/
            }
            closedir($dir);
        }catch(Error $e){}
    }
?>
<body>
    <ul>
        <?php scanDirectory(".")?>
    </ul>
</body>
</html>