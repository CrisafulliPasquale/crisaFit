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
    <title>CrisaFit | PT visualizza Clienti</title>
</head>

<body>
    <nav>
        <span>CrisaFit | PT View</span>
        
        <a href="../frontend/ownerpage.php">Home Page</a>
        <a href="../frontend/login.php">Logout</a>
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
    
    $sql = "SELECT ID, e_mail, cognome, nome FROM Cliente";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->get_result();

    echo "<div class='container' id='elenco'>
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