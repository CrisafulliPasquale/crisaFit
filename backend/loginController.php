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
    
        $sql = "SELECT * FROM Cliente WHERE nome=? AND password=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $nome, $passwordCriptata);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if($result->num_rows > 0){
            $_SESSION["nome"] = $nome; 
            header("Location: /www/frontend/userpage.php"); 
        }else{
            header("Location: /www/frontend/login.php");
            echo "nome o password errati";
        }
    }
    $conn->close();
    ?>