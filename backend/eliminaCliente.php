<?php
    // Avvia la sessione
    include 'connection.php';
    session_start();

    if(isset($_POST["ID"])){
       $id_cliente=$_POST["ID"];

       $sql= "DELETE FROM Cliente WHERE ID = ?";
       $sqlEliminaTariffa = "DELETE FROM Ottiene WHERE id_cliente = ?";
       $stmt = $conn->prepare($sql);
       $stmt2 = $conn->prepare($sqlEliminaTariffa);
       $stmt->bind_param("s", $id_cliente);
       $stmt2->bind_param("s", $id_cliente);

        if($stmt->execute()){
            if($stmt2->execute()){
                echo json_encode(['success' => true]);
            }
            else{
                echo json_encode(['success' => false, 'message' => $conn->error]);
            }
        } else{
            echo json_encode(['success' => false, 'message' => $conn->error]);
        }

        if($stmt->execute()){
            
        }
        exit;
    } else {
        echo json_encode(['success' => false, 'message' => 'No ID provided']);
    }
?>
 
 
                