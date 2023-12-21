<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $password = $_POST["password"];
        $passwordCriptata = md5($password);
    
        $sqlCliente = "SELECT * FROM Cliente WHERE nome=? AND password=?";
        $stmt = $conn->prepare($sqlCliente);
        $stmt->bind_param("ss", $nome, $passwordCriptata);
        $stmt->execute();
        $resultCliente = $stmt->get_result();


        $sqlGestore = "SELECT * FROM Gestore WHERE nome=? AND password=?";
        $stmt = $conn->prepare($sqlGestore);
        $stmt->bind_param("ss", $nome, $passwordCriptata);
        $stmt->execute();
        $resultGestore = $stmt->get_result();

    
        if($resultCliente->num_rows > 0){
            $_SESSION["nome"] = $nome; 
            header("Location: /www/frontend/userpage.php"); 
        }else if($resultGestore->num_rows > 0){
            $_SESSION["nome"] = $nome;
            header("Location: /www/frontend/ownerpage.php");
        }else{
            header("Location: /www/frontend/login.php");
            $errore = "Nome utente o password errati";
        }
    }
    $conn->close();
    ?>