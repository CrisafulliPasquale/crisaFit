<?php
    include "connection.php";

    if (isset($_POST['id'])) {
        // Prepara una query di eliminazione
        $query = $conn->prepare("DELETE FROM Cliente WHERE ID = ?");

        // Collega i parametri della query
        $query->bind_param("i", $_POST['id']);

        // Esegui la query e verifica se ha avuto successo
        if ($query->execute()) {
            // Se l'eliminazione ha avuto successo, invia una risposta JSON con success = true
            echo json_encode(['success' => true]);
        } else {
            // Se l'eliminazione non ha avuto successo, invia una risposta JSON con success = false e un messaggio di errore
            echo json_encode(['success' => false, 'message' => $conn->error]);
        }

        $query->close();
        $conn->close();
    } else {
        // Se non è stato inviato alcun ID, invia una risposta JSON con success = false e un messaggio di errore
        echo json_encode(['success' => false, 'message' => 'No ID provided']);
    }
?>
 
 
                