<?php
    
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Personal Trainer</title> 
</head>
<body>
    <nav>
        <span>CrisaFit | PT View</span>
        
        <a href="../frontend/elencoClienti.php">Visualizza Clienti</a>
        <a href="../frontend/gestioneTariffe.php">Gestisci tariffe</a>
        <a href="../frontend/login.php">Logout</a>
    </nav>

    <div class="container">
            <span><h2>Benvenuto, <?php echo $_SESSION["nome"]; ?></h2></span>
    </div>      
        
    
  
</body>
</html>