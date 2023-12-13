<?php
// FILEPATH: /workspaces/crisaFit/deleteAccount.php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CrisaFit";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connesione fallita: " . $conn->connect_error);
}

// Delete the account
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);

$userId = 1; // Replace with the actual user ID you want to delete
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Account eliminato con successo";
} else {
    echo "Impossibile eliminare l'account";
}

$stmt->close();
$conn->close();
?>
