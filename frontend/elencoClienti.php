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
        nav span{
            margin-right: auto;
        }

        #elenco table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }

        /* Stile per le intestazioni della tabella */
        #elenco th {
            text-align: left;
            padding: 10px;
            background-color: #f2f2f2;
        }

        /* Stile per le celle della tabella */
        #elenco td {
            padding: 10px;
            background-color: #fff;
        }

        /* Stile per le righe della tabella */
        #elenco tr:nth-child(even) {
            background-color: #f2f2f2;
        }
</style>
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
            xhr.send('id=' + clienteId);

            xhr.onload = function() {
                if (this.status == 200 && this.readyState == 4) {
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
                <th>Actions</th>
            </tr>";
    while($cliente = $result->fetch_assoc()){
        echo "<tr id='".$cliente["ID"]."'>
            <td>".$cliente["cognome"]."</td>
            <td>".$cliente["nome"]."</td>
            <td>".$cliente["e_mail"]."</td>
            <td><button onclick='eliminaCliente(".$cliente["ID"].")'>Elimina</button></td>
        </tr>"; 
    }
    echo "</table></div>";
?>