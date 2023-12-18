<?php
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

        $sql = "SELECT * FROM Cliente WHERE nome='$nome' AND password='$passwordCriptata'";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            session_start();
            $_SESSION["nome"] = $nome;
            header("Location: /www/frontend/userpage.php");
        }else{
            header("Location: /www/frontend/login.php");
            echo "nome o password errati";
        }
    }
    $conn->close();
?>