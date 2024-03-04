<?php
    session_start();

    
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: /www/frontend/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Contatti</title>
    
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

    <div class="container">
        <h2>Indirizzo: Piazzale Pesi, 25080, Bergamo</h2>
    </div>

    <div class="container">
        <h2>
            <a href="https://www.instagram.com/">Seguimi su Instagram</a>
        </h2>
    </div>

    
    

    
</body>
</html>