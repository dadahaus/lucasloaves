<?php
// Processes/processConnectDB.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbLucasLoaves"; // Changed to match your SQL file

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
