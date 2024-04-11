<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    session_start();
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Errore di connessione (' . $conn->connect_errno . ') ' . $conn->connect_error);
    }

    // Dati del form
    $nome = $_POST['nome'];
    $descrizione = $_POST['descrizione'];
    $prezzo = $_POST['prezzo'];
    $durata = $_POST['durata'];

    // Query SQL
    $sql = "INSERT INTO Tariffa (nome, descrizione, prezzo, durata, gestore_id) VALUES (?, ?, ?, ?, ?)";

    // Preparazione ed esecuzione della query
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssd", $nome, $descrizione, $prezzo, $durata, $_SESSION['id']);
    $stmt->execute();

    if ($stmt->error) {
        die('Errore durante la creazione della tariffa: ' . $stmt->error);
    }

    $stmt->close();

    header('Location: ../frontend/gestioneTariffe.php');
    exit;
?>