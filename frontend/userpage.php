<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: /www/frontend/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | MyAccount</title>
</head>
<body>
    <div class="user-container">
        <h2>CrisaFit | MyAccount </h2>
        <div>
            <span>Benvenuto</span>
        </div>
    </div>

</body>
</html>


