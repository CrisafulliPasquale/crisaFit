<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $password = $_POST["password"];
        $e_mail = $_POST["e_mail"];
        $codice_fiscale = $_POST["codice_fiscale"];
        $paese = $_POST["paese"];

        $verifica = "SELECT * FROM Gestore WHERE nome='$nome' AND password='$password'";
        $result = $conn->query($verifica);

        $passwordCriptata = md5($password);

        $sql = "INSERT INTO Gestore ( nome, cognome, password, e_mail, codice_fiscale, paese) VALUES ('$nome', '$cognome', '$passwordCriptata' , '$e_mail', '$codice_fiscale', '$paese)";
        $result = $conn->query($sql);
        header("Location: /www/frontend/login.php");
        $conn->close();
    }
?>