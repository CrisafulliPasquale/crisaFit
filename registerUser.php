<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["password"]) && isset($_POST["e-mail"]) && isset($_POST["paese"])){
        $_SESSION['POST'] = $_POST;
        header('Location: /crisaFit/prendiUtenti.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Registrazione</title>
    <style>
        body, h1, h2, p, label, input, button, select, option {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #171616;
        }

        header {
            text-align: center;
            padding: 10px;
            background-color: #e6720e;
            color: #fff;
        }

        form {
            background-color: #575452;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            margin-bottom: 8px;
            color: #555;
            display: block;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"], button {
            background-color: #e6720e;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover, button:hover {
            background-color: ##5c2c02;
        }

        select {
            margin-bottom: 16px;
        }
    </style>
</head>
<body>

    <header>
        <button onclick="location.href='login.php'">Login</button>
    </header>

    <form action="registerUser.php" method="post">
        <h2>Registrazione</h2>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="cognome">Cognome:</label>
        <input type="text" name="cognome" id="cognome" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <label for="e-mail">E-mail:</label>
        <input type="email" name="e-mail" id="e-mail" required>
        <label for="paese">Paese:</label>
        <input type="text" name="paese" id="paese" required>
        <input type="submit" value="Registrati">
    </form>

</body>
</html>
