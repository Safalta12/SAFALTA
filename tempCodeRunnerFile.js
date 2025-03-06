<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "GET Request Received: " . $_GET["name"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST Request Received: " . $_POST["email"];
}
?>