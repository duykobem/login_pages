<?php
$servername = "localhost";
$username = "root";
$password = "nhatduy123";
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}