<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Datenbankverbindung
$host = "localhost";
$username = "root";
$password = "123qwe123";
$db = "mensaPlan";

$conn = new mysqli($host, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>