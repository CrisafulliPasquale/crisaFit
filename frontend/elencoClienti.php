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

    <div>
        <h2><input type="button" id="elimina-btn">CANCELLA CLIENTE</h2>
    </div>
    <script>
    // Select all delete buttons

        document.addEventListener("DOMContentLoaded", function(event){
            var pulsanteElimina = document.getElementById('elimina-btn');
            pulsanteElimina.addEventListener("click", sulClick);

        });
        
        function sulClick(e){
            e.preventDefault();
            var clienteId = e.target.getAttribute('data-id');
            console.log(e);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'eliminaCliente.php', true);
            xhr.send();

            xhr.onload = function() {
                if (xhr.status === 200) {
                    
                    console.log('Error ${xhr.status}: ${xhr.statusText}');
                } else {
                    console.log('Done, got ${xhr.response.length} bytes');

                    var response = JSON.parse(xhr.responseText);
                    response = JSON.parse(xhr.responseText);
                    console.log(response);

                    var t = document.getElementById('elenco');
                    t.innerHTML = response;
                }
            };
            
            return false;
        }
    </script>

</body> 


<?php
    include "../backend/connection.php";
    $query = "SELECT e_mail,cognome,nome FROM Cliente";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if($count == 0){
        echo "<div class='container'>Non ci sono clienti registrati</div>";
    }else{
        echo "<div class='container' id='elenco'>
            <table>
                <tr>
                    <th>Cognome</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>
                <td>".$row["cognome"]."</td>
                <td>".$row["nome"]."</td>
                <td>".$row["e_mail"]."</td>
            </tr>"; 
        }
        echo "</table></div>";
    }
?>