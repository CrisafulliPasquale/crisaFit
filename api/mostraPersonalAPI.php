<?php
// 1. Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crisaFit";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// 2. Verifica se viene richiesto l'elenco completo dei gestori o solo uno specifico
if(isset($_GET['ID'])) {
    // Se è specificato un ID, esegui la query per ottenere solo il gestore specificato
    $idGestore = $_GET['ID'];
    $sqlGestori = "SELECT * FROM Gestore WHERE ID = $idGestore";
} else {
    // Altrimenti, esegui la query per ottenere tutti i gestori
    $sqlGestori = "SELECT * FROM Gestore";
}

$resultGestori = $conn->query($sqlGestori);

// Controllo se la query ha prodotto risultati
if ($resultGestori === false) {
    die("Errore nella query: " . $conn->error);
}

// Array per contenere i dati dei gestori
$gestori = array();

// Iterazione sui risultati della query per estrarre i dati dei gestori
while ($rowGestore = $resultGestori->fetch_assoc()) {
    $nome = isset($rowGestore["nome"]) ? $rowGestore["nome"] : "";
    $cognome = isset($rowGestore["cognome"]) ? $rowGestore["cognome"] : "";
    $email = isset($rowGestore["e_mail"]) ? $rowGestore["e_mail"] : "";

    // Aggiungi i dati del gestore all'array dei gestori
    $gestore = array(
        "nome" => $nome,
        "cognome" => $cognome,
        "email" => $email
    );

    // Aggiungi il gestore all'array dei gestori
    $gestori[] = $gestore;
}

// 3. Restituire i dati in formato JSON
header('Content-Type: application/json');
echo json_encode($gestori);

// 4. Chiudi la connessione
$conn->close();
?>
