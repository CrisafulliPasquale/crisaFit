<?php
    session_start();
    $_SESSION['POST'] = $_POST;
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: ../backend/prendiUtenti.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Login</title>
</head>
<body>

    <header class="head-login">
        <nav class="nav-login">CrisaFit</nav>
    </header>

    <div class="login-container">
        <h2>Login</h2>
        <form action="../backend/loginController.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Accedi</button>
        </form>
        <a href="registerUser.php">Non hai un account? Registrati!</a>
    </div>
        
        
</body>
</html>

