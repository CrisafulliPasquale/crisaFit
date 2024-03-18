<?php
// Connessione al database
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica della connessione
    if ($conn->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Verifica se il modulo è stato inviato
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];

        // Query SQL per inserire il nuovo cliente
        $sql = "INSERT INTO Cliente (nome, cognome) VALUES ('$nome', '$cognome')";

        if ($conn->query($sql) === TRUE) {
            echo "Nuovo cliente registrato con successo";
        } else {
            echo "Errore: " . $sql . "<br>" . $db->error;
        }
    }

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Registra Clienti</title>
</head>
<body>
    <nav>
        <span>CrisaFit | PT View</span>
        
        <a href="../frontend/ownerpage.php">Home Page</a>
        <a href="../frontend/elencoClienti.php">Visualizza Clienti</a>
        <a href="../frontend/login.php">Logout</a>
    </nav>

    <form action="..registraClienti.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="cognome">Cognome:</label><br>
        <input type="text" id="cognome" name="cognome"><br>
        <input type="submit" value="Registra">
    </form>
</body>
</html>