<?php
// 1. connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crisaFit";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// 2. verifica se viene richiesto l'elenco completo degli utenti o solo uno specifico
if(isset($_GET['ID'])) {
    // Se è specificato un ID, esegui la query per ottenere solo l'utente specificato
    $idcliente = $_GET['ID'];
    $sqlClienti = "SELECT * FROM Cliente WHERE ID = $idcliente";
} else {
    // Altrimenti, esegui la query per ottenere tutti gli utenti
    $sqlClienti = "SELECT * FROM Cliente";
}

$resultClienti = $conn->query($sqlClienti);

// Controllo se la query ha prodotto risultati
if ($resultClienti === false) {
    die("Errore nella query: " . $conn->error);
}

// Array per contenere i dati degli utenti
$clienti = array();

// Iterazione sui risultati della query per estrarre i dati degli utenti
while ($rowUtente = $resultClienti->fetch_assoc()) {
    $nome = isset($rowUtente["nome"]) ? $rowUtente["nome"] : "";
    $cognome = isset($rowUtente["cognome"]) ? $rowUtente["cognome"] : "";
    $email = isset($rowUtente["e_mail"]) ? $rowUtente["e_mail"] : "";

    // Aggiungi i dati dell'utente all'array degli utenti
    $utente = array(
        "nome" => $nome,
        "cognome" => $cognome,
        "email" => $email
    );

    // Aggiungi l'utente all'array degli utenti
    $clienti[] = $utente;
}

// 4. restituire i dati in formato JSON
header('Content-Type: application/json');
echo json_encode($clienti);

// 5. Chiudi la connessione
$conn->close();
?>
