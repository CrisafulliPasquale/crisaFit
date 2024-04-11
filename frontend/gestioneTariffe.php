<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | PT Gestisci Tariffe</title>
</head>

<body>
    <nav>
        <span>CrisaFit | PT View</span>
        
        <a href="../frontend/ownerpage.php" class="home-page">Home Page</a>
        <a href="../frontend/elencoClienti.php">Visualizza Cliente</a>
    </nav>

    <div class="div-container">
        <form action="../backend/creaTariffa.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="descrizione">Descrizione:</label></br>
            <textarea id="descrizione" name="descrizione" required></textarea></br>

            <label for="durata">Durata in giorni:</label>
            <input type="number" id="durata" name="durata" required>

            <label for="prezzo">Prezzo:</label>
            <input type="number" id="prezzo" name="prezzo" required>

            <input type="submit" value="Crea Tariffa"></br>
               

        </form>
    </div>
</body>

</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM Tariffa WHERE gestore_id = ".$_SESSION["id"]."";
    $result = $conn->query($sql);

    echo '<form class="div-container" action="../backend/eliminaTariffa.php" method="post">';
    echo '<select name="id">';

    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
    }

    echo '</select>';
    echo '<br><br>';
    echo '<input type="submit" class="delete-button" value="Elimina tariffa">';
    echo '</form>';

