<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        $_SESSION['POST'] = $_POST;
        header('Location: /www/prendiUtenti.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Login</title>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="registerUser.php" method="post">
            <label for="username">Nome:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Accedi</button>
        </form>
    </div>
    <a href="registerUser.php">Non hai un account? Registrati!</a>

</body>
</html>
