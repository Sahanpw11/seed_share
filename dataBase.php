<?php
// Railway MySQL connection using environment variables
$host = getenv('MYSQLHOST') ?: 'localhost';
$user = getenv('MYSQLUSER') ?: 'root';
$password = getenv('MYSQLPASSWORD') ?: '';
$dbname = getenv('MYSQLDATABASE') ?: 'seedshare_db';
$port = getenv('MYSQLPORT') ?: '3306';

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname, $port);

if(!$conn){
    die("Database connection failed: ".mysqli_connect_error());
}
?>