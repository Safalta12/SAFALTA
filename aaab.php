<form action="script.php" method="POST">
    <input type="email" name="email">
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
    echo "GET Request Received: " . htmlspecialchars($_GET["name"]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    echo "POST Request Received: " . htmlspecialchars($_POST["email"]);
}
?>
