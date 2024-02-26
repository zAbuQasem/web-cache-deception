<?php
session_cache_limiter('public');
session_start();
function isUserLoggedIn() {
    return isset($_SESSION['username']);
}

function displayUserInfo() {
    if (isUserLoggedIn()) {
        echo "<h2>User Information:</h2>";
        echo "<table>";
        echo "<tr><th>Attribute</th><th>Value</th></tr>";
        foreach ($_SESSION as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Please log in to view user information.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Dashboard</h1>
        <div class="dashboard">
            <?php displayUserInfo(); ?>
        </div>
        <div class="buttons">
            <a href="register.php" class="btn">Register</a>
        </div>
    </div>
</body>
</html>