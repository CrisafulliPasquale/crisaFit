<?php

    session_start();
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: ../frontend/login.php');
    }



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    $conn = new mysqli($servername, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Tariffe</title>
</head>
<body>
    <nav>
        <span>CrisaFit | Tariffe</span>
        
        <a href="../frontend/userpage.php">MyAccount</a>
        <a href="../frontend/contatti.php">Contatti</a>
        <a href="../frontend/login.php">Esci</a>
    </nav>

    <?php


    // Connessione al database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Errore di connessione (' . $conn->connect_errno . ') ' . $conn->connect_error);
    }

    if (isset($_SESSION['selected_trainer_id'])) {
        $trainer_id = $_SESSION['selected_trainer_id'];
    }
    // Query SQL
    $sql = "SELECT * FROM Tariffa WHERE gestore_id = $trainer_id";

    
    // Esecuzione della query e ottenimento dei risultati
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output di ciascuna tariffa
        while($row = $result->fetch_assoc()) {
            echo '<div class="div-container">';
            echo '<h2>' . $row['nome'] . '</h2>';
            echo '<p>' . $row['descrizione'] . '</p>';
            echo '<p>Prezzo: ' . $row['prezzo'] . '</p>';
            echo '<button id="ottenere"> Ottieni </button>';

            echo '</div>';
            
        }
    } else {
        echo 'Non ci sono tariffe disponibili';
    }
    
    $conn->close();
    ?>
        
</body>
</html>