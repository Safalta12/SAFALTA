<?php
$servername = "localhost"; 
$username = "username";     
$password = "password";    
$database = "dbms";     

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$conn->close();
?>
