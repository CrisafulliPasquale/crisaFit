<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: /www/frontend/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | MyAccount</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .user-container {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        nav {
            background-color: black;
            color: #fff;
            text-align: right;
            padding: 25px 0;
        }

        nav a {
            color: orange;
            text-decoration: none;
            margin: 0 15px;
        }

        div {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#">Home</a>
        <a href="/www/frontend/contatti.php">Contatti</a>
        <a href="/www/frontend/tariffe.php">Tariffe</a>
        <a href="/www/frontend/login.php">Esci</a>
    </nav>

    <div class="user-container">
        <h2>CrisaFit | MyAccount</h2>
        <div>
            <span>Benvenuto</span>
        </div>
    </div>
</body>
</html>
