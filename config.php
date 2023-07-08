<?php

// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "crud_app";

// Establish database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}


