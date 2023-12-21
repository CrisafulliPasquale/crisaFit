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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #171616;
        }

        .login-container {
            background-color: #575452;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            margin: 50px auto;
        }

        h2 {
            text-align: center;
            color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #ccc;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #e6720e;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #5c2c02;
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

        header {
            text-align: right;
            padding: 10px;
            background-color: #e6720e;
            color: #fff;
        }

        nav {
            text-align: left;
            padding: 25 px 0;
            margin: 0px;
        }
</style>
    </style>
</head>
<body>

    <header>
        <nav>CrisaFit</nav>
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
    </div>
    <a href="registerUser.php">Non hai un account? Registrati!</a>
        
        
</body>
</html>

