<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["paese"]) && isset($_POST["e-mail"]) && isset($_POST["codiceFiscale"]) && isset($_POST["password"])){
        $_SESSION['POST'] = $_POST;
        header('Location: prendiGestori.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Registrazione</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #171616;
            color: #fff;
        }

        header {
            text-align: center;
            padding: 10px;
            background-color: #e6720e;
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
            color: white;
            display: block;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"],
        button {
            background-color: #e6720e;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #5c2c02;
        }

        select {
            margin-bottom: 16px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #e6720e;
            text-decoration: none;
        }

        a:hover {
            color: #5c2c02;
        }
    </style>
</head>

<body>
    <div>
        <form action="registerOwnerController.php" method="POST">
            <h2>Registrazione Personal Trainer</h2>
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <label for="cognome">Cognome:</label>
            <input type="text" name="cognome">
            <label for="paese">Paese:</label>
            <input type="text" name="paese">
            <label for="e_mail">E-mail:</label>
            <input type="text" name="e_mail">
            <label for="codice_fiscale">Codice Fiscale:</label>
            <input type="text" name="codice_fiscale">
            <label for="password">Password:</label>
            <input type="password" name="password">
            <input type="submit" value="Registrati">
        </form>
    </div>
    <a href="login.php">Sei già nostro socio? Accedi subito da qui!</a>
</body>

</html>
