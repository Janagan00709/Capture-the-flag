<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

define('DB_SERVER', '127.0.0.1:4400');
define('DB_USERNAME', 'kali');
define('DB_PASSWORD', 'kali');
define('DB_NAME', 'test');
 
/* Attempt to connect to MySQL1 database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
/* Check connection */
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>