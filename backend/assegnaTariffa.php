<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Errore di connessione (' . $conn->connect_errno . ') ' . $conn->connect_error);
    }

    $tariffa = $_GET['tariffa'];

    $sql = "INSERT INTO Ottiene (id_cliente, id_tariffa) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $_SESSION['id'], $tariffa);
    $stmt->execute();

    

    if ($stmt->error) {
        die('Errore durante l\'assegnazione della tariffa: ' . $stmt->error);
    }

    $stmt->close();

    header('Location: ../frontend/userpage.php');
?>