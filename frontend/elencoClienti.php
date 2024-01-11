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

        #elenco{
            display: flex;
            justify-content: space-between;
            color: white;
        }
</style>
<body>
    <nav>
        <span>CrisaFit | PT View</span>
        
        <a href="../frontend/ownerpage.php">Home Page</a>
        <a href="../frontend/login.php">Logout</a>
    </nav>
</body> 

<?php
    include "../backend/connection.php";
    $query = "SELECT e_mail,cognome,nome FROM Cliente";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if($count == 0){
        echo "<div class='container'>Non ci sono clienti registrati</div>";
    }else{
        echo "<div class='container' id='elenco'>
            <h2>Elenco Clienti</h2></br>
        </div>";
        echo "<div class='container' id='elenco'>";
        while($row = mysqli_fetch_array($result)){
            "<br>";
            echo"
                <h4>".$row["cognome"]."</h4>
                <h4>".$row["nome"]."</h4>
                <h4>".$row["e_mail"]."</h4>
                "; 
        }
        echo "</div>";
    }
?>