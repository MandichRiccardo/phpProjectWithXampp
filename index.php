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
                        array_push($ret, "<\a href=\"$directory/$file\">$directory/$file</a>");
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
        <?php var_dump($file)?>
    </ul>
</body>
</html>