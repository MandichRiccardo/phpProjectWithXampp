<?php
session_start();
$_SESSION['athletes'] = [];
?>
<meta http-equiv="refresh" content="0; url=<?php echo $_GET["from"] ?>">