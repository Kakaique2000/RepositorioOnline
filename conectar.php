<?php
$servername = "seu servidor";
$username = "seu username";
$password = "sua senha";
$dbname = "aulas";

//A sua 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 







?>