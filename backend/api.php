<?php
// FILEPATH: /path/to/your/server/api.php

// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crisaFit";



$conn

 = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Ottieni l'ID dell'utente dalla sessione
$userId = $_SESSION['ID_cliente'];

// Ottieni i dettagli dell'abbonamento dell'utente dal database
$sql = "SELECT * FROM Abbonamento WHERE ID_cliente = $userId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Stampa i dettagli dell'abbonamento in formato JSON
    while($row = $result->fetch_assoc()) {
        echo json_encode($row);
    }
} else {
    echo json_encode(["nome" => "Non hai un abbonamento"]);
}

$conn->close();
?>