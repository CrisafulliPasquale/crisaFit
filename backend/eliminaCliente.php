<?php
    // Avvia la sessione
    session_start();

    if(isset($_POST["ID"])){
       $id_cliente=$_POST["ID"];

       $sql= "DELETE FROM Cliente WHERE ID = ?";
       $stmt = $conn->prepare($sql);
       $stmt->bind_param("s", $id_cliente);

        if($stmt->execute()){
            echo json_encode(['success' => true]);
        } else{
            echo json_encode(['success' => false, 'message' => $conn->error]);
        }
        exit;
    } else {
        echo json_encode(['success' => false, 'message' => 'No ID provided']);
    }
?>
 
 
                