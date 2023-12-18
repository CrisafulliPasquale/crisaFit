<?php
    include "/www/backend/connection.php";
    session_start();

    $post = $_SESSION['POST'];
    $la_query = "SELECT * FROM Cliente WHERE nome = '$post[nome]' AND password = '$post[password]'";

    if($result = $conn->query($la_query)){
        echo("Errore nella query: $conn->error");
    }else{
        echo("Dalla tabella Clienti ho estratto: " .$result->num_rows. " record(s)<br>");
        if($result->num_rows == 1){
            $un_record = $result->fetch_assoc();
            if(password_verify($post['password'], $un_record['password'])){
                header("Location: /www/frontend/registerUser.php");
            }else{
                echo("Password errata");
            }
            $result -> close();
        }else{
            header("Location: /www/frontend/login.php");
        }
    }
    $conn -> close();
?>    