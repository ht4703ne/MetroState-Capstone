<?php
//Database connection.
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ffb_stats');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//Check connection
if ($link ===false){
    die("ERROR: Could not connect. " . mysql_connect_error());
}
?>