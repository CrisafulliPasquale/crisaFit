<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["paese"]) && isset($_POST["e-mail"]) && isset($_POST["codiceFiscale"]) && isset($_POST["password"])){
        $_SESSION['POST'] = $_POST;
        header('Location: /www/inserimentoGestori.php');
    }
?>

<!DOCTYPE html> 
<html>
    <body>
        <form action="registerOwner.php" method="POST">
            <p>Inserisci il tuo nome</p>
            <input type="text" name="nome"></br>
            <p>Inserisci il tuo cognome</p>
            <input type="text" name="cognome"></br>
            <p>Inserisci il tuo paese</p>
            <input type="text" name="paese"></br>
            <p>Inserisci la tua e-mail</p>  
            <input type="text" name="e-mail"></br>
            <p>Inserisci il tuo codice fiscale</p>
            <input type="text" name="codiceFiscale"></br>
            <p>Inserisci la tua password</p>
            <input type="password" name="password"></br></br>
            <input type="submit">
        </form>
    </body>