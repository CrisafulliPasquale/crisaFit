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
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
        $cognome = mysqli_real_escape_string($conn, $_POST["cognome"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $e_mail = mysqli_real_escape_string($conn, $_POST["e_mail"]);
        $codice_fiscale = mysqli_real_escape_string($conn, $_POST["codice_fiscale"]);
        $paese = mysqli_real_escape_string($conn, $_POST["paese"]);

        $verifica = "SELECT * FROM Gestore WHERE nome='$nome' AND password='$password'";
        $result = $conn->query($verifica);

        $passwordCriptata = md5($password);

        $codice_fiscale = $_POST['codice_fiscale'];

        // Verifica la validità del codice fiscale
        if (!preg_match('/^[A-Z]{6}\d{2}[A-Z]\d{2}[A-Z]\d{3}[A-Z]$/i', $codice_fiscale)) {
            die('Codice fiscale non valido');
        }

        $sql = "INSERT INTO Gestore ( nome, cognome, password, e_mail, codice_fiscale, paese) VALUES ('$nome', '$cognome', '$passwordCriptata' , '$e_mail', '$codice_fiscale', '$paese')";
        $result = $conn->query($sql);
        header("Location: ../frontend/login.php");
        $conn->close();
    }
?>