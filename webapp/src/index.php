<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Cache Deception</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        p {
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Web Cache Deception</h1>
        <p>
            Web Cache Deception is a vulnerability that occurs when an attacker tricks a web server into caching
            pages with different content under the same URL. This can lead to a variety of attacks, such as accessing
            sensitive user data or performing unauthorized actions.
        </p>
        <p>
            To learn more about Web Cache Deception and how to prevent it, you can refer to the following resources:
        </p>
        <ul>
            <li><a href="https://portswigger.net/web-security/web-cache-deception" target="_blank" style="color: #007bff; text-decoration: none;">PortSwigger - Web Cache Deception</a></li>
            <li><a href="https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/06-Session_Management_Testing/02-Testing_for_Cache_Management" target="_blank" style="color: #007bff; text-decoration: none;">OWASP - Testing for Cache Management</a></li>
        </ul>
        <div class="buttons">
            <a href="register.php" class="btn" style="background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; text-decoration: none;">Register</a>
            <a href="dashboard.php" class="btn" style="background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; text-decoration: none;">Dashboard</a>
            <a href="http://158.220.124.139:30001" class="btn" target="_blank" style="background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; padding: 10px 20px; text-decoration: none;">Bot</a>

        </div>
        <div style="text-align: center; margin-top: 20px;">
            <p>Contact me:</p>
            <a href="mailto:zeyad.abuqasem@gmail.com" style="color: #007bff; text-decoration: none; margin-right: 10px;">Email</a>
            <a href="https://www.linkedin.com/in/zeyad-abulaban/" target="_blank" style="color: #007bff; text-decoration: none;">LinkedIn</a>
        </div>
    </div>
</body>
</html>
