<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | PT visualizza Clienti</title>
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #e6720e;
    }

    .container {
        background-color: black;
        padding: 20px;
        margin: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        display: block;
        margin-top: 20px;
        color: #e6720e;
    }

    nav {
        background-color: black;
        color: #fff;
        text-align: right;
        padding: 25px 0;
        display: flex;
        padding: 25px;
    }

    nav a {
        color: #e6720e;
        text-decoration: none;
        margin: 0 0 0 15px;
    }

    nav span {
        margin-right: auto;
    }

    .div-container {
        background-color: white;
        padding: 20px;
        margin: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .div-container form {
        display: flex;
        flex-direction: column;
    }

    .div-container form label {
        margin-bottom: 10px;
    }

    .div-container form input[type="text"],
    .div-container form input[type="number"],
    .div-container form textarea {
        margin-bottom: 20px;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .div-container form input[type="submit"] {
        background-color: #e6720e;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }

    .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    select {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    select:focus {
        border-color: #e6720e;
    }

    .delete-button {
        background-color: #e6720e;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 16px;
    }

    .delete-button:hover {
        background-color: #c5600c;
    }
    
</style>
<body>
    <nav>
        <span>CrisaFit | PT View</span>
        
        <a href="../frontend/ownerpage.php">Home Page</a>
        <a href="../frontend/elencoClienti.php">Visualizza Cliente</a>
    </nav>

    <div class="div-container">
        <form action="../backend/creaTariffa.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="descrizione">Descrizione:</label>
            <textarea id="descrizione" name="descrizione" required></textarea>

            <label for="prezzo">Prezzo:</label>
            <input type="number" id="prezzo" name="prezzo" required>

            <input type="submit" value="Crea Tariffa"></br>

            <input type="submit" value="Elimina tariffa">
               

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

    $sql = "SELECT * FROM Tariffa";
    $result = $conn->query($sql);

    echo '<form action="../backend/eliminaTariffa.php" method="post">';
    echo '<select name="id">';

    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['id'] . '">' . $row['nome'] . '</option>';
    }

    echo '</select>';
    echo '<input type="submit" class="delete-button" value="Elimina tariffa">';
    echo '</form>';
