<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    // Crea connessione
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Controlla connessione
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prendi l'ID della tariffa da eliminare
    $id = $_POST['id'];

    // Crea query SQL
    $sql = "DELETE FROM Tariffa WHERE id=$id";

    // Esegui la query
    if ($conn->query($sql) === TRUE) {
        header('Location: ../frontend/gestioneTariffe.php');
        exit;
    } else {
        echo "Errore durante l'eliminazione della tariffa: " . $conn->error;
    }

    $conn->close();
?>