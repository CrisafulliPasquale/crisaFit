<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["paese"]) && isset($_POST["e-mail"]) && isset($_POST["codiceFiscale"]) && isset($_POST["password"])){
        $_SESSION['POST'] = $_POST;
        header('Location: ../backend/prendiGestori.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Registrazione</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <form class="registrazione" action="../backend/registerOwnerController.php" method="POST">
            <h2 class="testoR">Registrazione Personal Trainer</h2>
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
            <a class="registrato" href="login.php">Sei già nostro socio? Accedi subito da qui!</a>
        </div>
</body>

</html>
