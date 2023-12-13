<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["password"]) && isset($_POST["e-mail"]) && isset($_POST["paese"])){
        $_SESSION['POST'] = $_POST;
        header('Location: /crisaFit/inserimentoUtenti.php');
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <form action="registerUser.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            <label for="cognome">Cognome</label>
            <input type="text" name="cognome" id="cognome" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <label for="e-mail">E-mail</label>
            <input type="email" name="e-mail" id="e-mail" required>
            <label for="paese">Paese</label>
            <input type="text" name="paese" id="paese" required>
            <input type="submit" value="Registrati">
        </form>
    </html>