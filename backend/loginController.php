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
        $mail = $_POST["e_mail"];
        $password = $_POST["password"];
        $passwordCriptata = md5($password);
    
        $sqlCliente = "SELECT * FROM Cliente WHERE e_mail=? AND password=?";
        $stmt = $conn->prepare($sqlCliente);
        $stmt->bind_param("ss", $mail, $passwordCriptata);
        $stmt->execute();
        $resultCliente = $stmt->get_result();


        $sqlGestore = "SELECT * FROM Gestore WHERE e_mail=? AND password=?";
        $stmt = $conn->prepare($sqlGestore);
        $stmt->bind_param("ss", $mail, $passwordCriptata);
        $stmt->execute();
        $resultGestore = $stmt->get_result();

    
        if($resultCliente->num_rows > 0){
            $_SESSION["e_mail"] = $mail; 
            header("Location: ../frontend/userpage.php"); 
        }else if($resultGestore->num_rows > 0){
            $_SESSION["e_mail"] = $mail;
            header("Location: ../frontend/ownerpage.php");
        }else{
            header("Location: ../frontend/login.php");
            $errore = "Mail o password errati";
        }
    }
    $conn->close();
    ?>