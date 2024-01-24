<?php
    session_start();

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        // Se l'utente non ha effettuato il login, reindirizzalo alla pagina di login
        echo json_encode(['success' => false, 'message' => 'Not logged in']);
        exit;
    }

    
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: /www/frontend/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Contatti</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e6720e;
        }

        .container {
            background-color: black;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            display: block;
            margin-top: 20px;
            color: #e6720e;
        }

        nav {
            background-color: black;
            color: #fff;
            text-align: right;
            padding: 25px 0;
            display: flex;
            padding: 25px;
        }

        nav a {
            color: #e6720e;
            text-decoration: none;
            margin: 0 0 0 15px;
        }
        nav span{
            margin-right: auto;
        }

        div {
            margin-top: 20px;
        }

        span {
            color: white;
        }

        a {
            display: block;
            margin-top: 20px;
            color: #e6720e;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
        <span>CrisaFit | Contatti</span>
        
        <a href="userpage.php">MyAccount</a>
        <a href="tariffe.php">Tariffe</a>
        <a href="login.php">Esci</a>
    </nav>

    <div class="container">
        <h2>Numero di telefono: 371 319 5864</h2>
    </div>

    <div class="container">
        <h2>
            <a href="https://mail.google.com/">e-mail: crisafullim48@gmail.com</a>
        </h2>
    </div>
</body>
</html>