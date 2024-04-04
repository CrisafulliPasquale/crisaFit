<?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: ../frontend/login.php');


        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | My Account</title> 
</head>
<body>
    <nav>
        <span>CrisaFit | PT View</span>
        
        <a href="../frontend/tariffe.php">Tariffe</a>
        <a href="../backend/logout.php">Logout</a>
    </nav>

    <div class="container">
            <span><h2>Benvenuto</h2></span>
    </div> 

    <div class="container" id="tariffa">
        <span><h2>I miei abbonamenti </h2></span>

        <?php
            $sql = "SELECT * FROM Tariffa INNER JOIN Ottiene ON Tariffa.id = Ottiene.id_tariffa WHERE Ottiene.id_cliente = " . $_SESSION['id'];

    
            // Esecuzione della query e ottenimento dei risultati
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                // Output di ciascuna tariffa
                while($row = $result->fetch_assoc()) {
                    echo '<h3>' . $row['nome'] . '</h3>';
                    echo '<p style="color:white;">' . $row['nome'] . '</p>';    
                    echo '<p style="color:white;">' . $row['descrizione'] . '</p>';
                    

                }
            } else {
                echo 'Non ci sono tariffe disponibili';
            }
            
            $conn->close();
        ?>
    </div>
</body>
</html>