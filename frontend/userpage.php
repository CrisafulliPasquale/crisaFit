<?php
    session_start();
    
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: login.php');
    }

    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: ../frontend/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | My Account</title> 
</head>
<body>
    <nav>
        <span>CrisaFit | PT View</span>
        
        <a href="../frontend/contatti.php">Contatti</a>
        <a href="../frontend/tariffe.php">Tariffe</a>
        <a href="../frontend/login.php">Logout</a>
    </nav>

    <div class="container">
            <span><h2>Benvenuto, <?php echo $_SESSION["nome"]; ?></h2></span>
    </div> 

    <div class="container" id="tariffa">
        <span><h2>Il mio abbonamento </h2></span>
    </div>
</body>
</html>