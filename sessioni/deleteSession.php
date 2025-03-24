<?php
session_start();
session_destroy();
if($_GET["from"] != ""){
?>
<meta http-equiv="refresh" content="0; url=<?php echo $_GET["from"] ?>">
<?php }