<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../frontend/style.css">
    <title>CrisaFit | Registrazione</title>
    
</head>

<body>

    <nav>
        <span>CrisaFit | </span>
        <a href='login.php'>Login</a>
        
    </nav>

    <div>
        <form class="registra" method="post" action="../backend/registerController.php">
            <h2 class="testoR2">Registrazione</h2>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="cognome">Cognome:</label>
            <input type="text" name="cognome" id="cognome" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <label for="e_mail">E-mail:</label>
            <input type="email" name="e_mail" id="e_mail" required>
            <label for="paese">Paese:</label>
            <input type="text" name="paese" id="paese" required>
            <input type="submit" value="Registrati">
        </form>
        <a class="centraR" href="registerOwner.php">Sei un personal Trainer? Registrati qui!</a>
    </div>
</body>

</html>