<?php
session_cache_limiter('public');
session_start();
$adminUser = [
    'username' => 'Zeyad_Abulaban',
    'age' => 24,
    'about' => 'Here is the flag you deserve zAbuQasem{C4cH3_D3c3Pt10n_FTW!}'
];

if (isset($_POST['register']) && isset($_POST['username']) && isset($_POST['age']) && isset($_POST['about']) ) {
    if ($_POST['username'] === $adminUser['username']){
        echo "Nope!";
    }else{
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['about'] = $_POST['about'];
        header("Location: dashboard.php");
        exit();
    }

}
if (isset($_GET['backdoor1337_546234'])) {
    $_SESSION['username'] = $adminUser['username'];
    $_SESSION['age'] = $adminUser['age'];
    $_SESSION['about'] = $adminUser['about'];
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }

        .success {
            color: #28a745;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form method="post" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required><br>

            <label for="about">About:</label><br>
            <textarea id="about" name="about" rows="4" required></textarea><br>

            <input type="submit" name="register" value="Register" class="btn">
        </form>
    </div>
</body>
</html>
