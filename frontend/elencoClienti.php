<?php

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
    
    // Inizializzazione della variabile di ricerca
    $search = '';
    
    // Verifica se è stata inviata una richiesta di ricerca
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
    }
    
    // Query SQL per cercare i clienti
    $sql = "SELECT * FROM Cliente WHERE nome LIKE '%$search%' OR cognome LIKE '%$search%'";
    
    $result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | PT visualizza Clienti</title>
</head>

<body>
    <nav>
        <span>CrisaFit | PT View</span>
        
        <a href="../frontend/ownerpage.php">Home Page</a>
        <!--<a href="../frontend/registraClienti.php">Registra Cliente</a> -->
        <a href="../backend/logout.php">Logout</a>
    </nav>


    
        
    <script>
    // Select all delete buttons
        var deleteButtons = document.querySelectorAll("#elenco tr td button");

        // Add event listener to each button
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var id_cliente = this.parentElement.parentElement.id;
                eliminaCliente(id_cliente);
            });
        });

        function eliminaCliente(id_cliente){
            var clienteId = id_cliente;
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "../backend/eliminaCliente.php", true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send("ID=" + clienteId);

            xhr.onload = function() {
                if (this.status == 200 && this.readyState == 4) {
                    console.log(this.responseText);
                    var response = JSON.parse(this.responseText);
                    if (response.success) {
                        document.getElementById(clienteId).remove();
                        console.log("Cliente eliminato con successo");
                    } else {
                        console.log("Errore: " + response.message);
                    }
                } else {
                    console.log("Errore di rete");
                }
            };
        }
    </script>

</body> 


<?php

    include '../backend/connection.php';
    
    
    $sql = "SELECT ID, e_mail, cognome, nome FROM Cliente WHERE gestore_id = ".$_SESSION['id']." ORDER BY cognome ASC";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->get_result();

    echo "<div class='container' id='elenco'>
        <form action='elencoClienti.php' method='post'>
            <input type='text' name='search' placeholder='Cerca cliente'>
            <button type='submit'>Cerca</button>
        </form>
        <table>
            <tr>
                <th>Cognome</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Azioni</th>
            </tr>";
    while($cliente = $result->fetch_assoc()){
        echo "<tr id='".$cliente["ID"]."'>
            <td>".$cliente["cognome"]."</td>
            <td>".$cliente["nome"]."</td>
            <td>".$cliente["e_mail"]."</td>
            <td><button onclick='eliminaCliente(".$cliente["ID"].")'>Elimina Cliente</button></td>
        </tr>"; 
    }
    echo "</table></div>";
?>