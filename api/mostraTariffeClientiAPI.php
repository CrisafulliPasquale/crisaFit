<?php
// Includi il file di connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crisaFit";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Verifica se è stato specificato un ID del cliente
if(isset($_GET['ID'])) {
    $idCliente = $_GET['ID'];

    // Query per ottenere le tariffe associate al cliente specificato
    $sqlTariffe = "SELECT Tariffa.nome, Tariffa.descrizione, Tariffa.prezzo
                   FROM Tariffa
                   INNER JOIN Ottiene ON Tariffa.id = Ottiene.id_tariffa
                   WHERE Ottiene.id_cliente = $idCliente";

    $resultTariffe = $conn->query($sqlTariffe);

    // Controllo se la query ha prodotto risultati
    if ($resultTariffe === false) {
        die("Errore nella query: " . $conn->error);
    }

    // Array per contenere i dati delle tariffe del cliente
    $tariffeCliente = array();

    // Iterazione sui risultati della query per estrarre i dati delle tariffe
    while ($rowTariffa = $resultTariffe->fetch_assoc()) {
        $nome = isset($rowTariffa["nome"]) ? $rowTariffa["nome"] : "";
        $descrizione = isset($rowTariffa["descrizione"]) ? $rowTariffa["descrizione"] : "";
        $prezzo = isset($rowTariffa["prezzo"]) ? $rowTariffa["prezzo"] : "";

        // Aggiungi i dati della tariffa all'array delle tariffe del cliente
        $tariffa = array(
            "nome" => $nome,
            "descrizione" => $descrizione,
            "prezzo" => $prezzo
        );

        // Aggiungi la tariffa all'array delle tariffe del cliente
        $tariffeCliente[] = $tariffa;
    }

    // Restituisci i dati delle tariffe del cliente in formato JSON
    header('Content-Type: application/json');
    echo json_encode($tariffeCliente);
} else {
    // Se l'ID del cliente non è stato specificato, restituisci un elenco completo delle tariffe
    $sqlElencoCompleto = "SELECT * FROM Tariffa";
    $resultElencoCompleto = $conn->query($sqlElencoCompleto);

    if ($resultElencoCompleto === false) {
        die("Errore nella query: " . $conn->error);
    }

    $tariffeCompleto = array();

    // Iterazione sui risultati della query per estrarre i dati delle tariffe complete
    while ($rowTariffaCompleta = $resultElencoCompleto->fetch_assoc()) {
        $nome = isset($rowTariffaCompleta["nome"]) ? $rowTariffaCompleta["nome"] : "";
        $descrizione = isset($rowTariffaCompleta["descrizione"]) ? $rowTariffaCompleta["descrizione"] : "";
        $prezzo = isset($rowTariffaCompleta["prezzo"]) ? $rowTariffaCompleta["prezzo"] : "";

        // Aggiungi i dati della tariffa all'array delle tariffe complete
        $tariffaCompleta = array(
            "nome" => $nome,
            "descrizione" => $descrizione,
            "prezzo" => $prezzo
        );

        // Aggiungi la tariffa all'array delle tariffe complete
        $tariffeCompleto[] = $tariffaCompleta;
    }

    // Restituisci l'elenco completo delle tariffe in formato JSON
    header('Content-Type: application/json');
    echo json_encode($tariffeCompleto);
}

// Chiudi la connessione al database
$conn->close();
?>
