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

$sql = "INSERT INTO Ottiene (id_cliente, id_tariffa, data_inizio) VALUES (?, ?, ?)";

$stamp_inizio = time();
$data_inizio = date('Y-m-d H:i:s', $stamp_inizio);
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $_SESSION['id'], $tariffa, $data_inizio); // Modificato per includere anche la data di inizio
$stmt->execute();

if ($stmt->error) {
    die('Errore durante l\'assegnazione della tariffa: ' . $stmt->error);
}

$stmt->close();

header('Location: ../frontend/userpage.php');
?>
