<?php
    $GLOBALS["conn"] = new mysqli(hostname: "localhost",username: "swudb", database:"my_swudb", port:3306);
    if ($GLOBALS["conn"]->connect_error) {
        die("Connection failed: " . $GLOBALS["conn"]->connect_error);
    }
    $file = basename($_SERVER['PHP_SELF']);
    $file = preg_replace('/\?.*/', '', $file);
    $file = preg_replace('/\.php$/', '', $file);