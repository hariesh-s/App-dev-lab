<?php

// Database configuration
$host = "127.0.0.1";
$username = "root";
$password = "iamroot";
$dbname = "hospital";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
