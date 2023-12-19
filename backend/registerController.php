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
        $paese = $_POST["paese"];

        $verifica = "SELECT * FROM Cliente WHERE nome='$nome' AND e_mail='$e_mail'";
        $result = $conn->query($verifica);

        $passwordSegreta = md5($password);

        $sql = "INSERT INTO Cliente ( nome, cognome, password, e_mail, paese) VALUES ('$nome', '$cognome', '$passwordSegreta' , '$e_mail', '$paese')";
        $result = $conn->query($sql);
        header("Location: /www/frontend/userpage.php");
        $conn->close();
    }
?>