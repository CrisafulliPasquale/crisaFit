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
    <title>CrisaFit | Personal Trainer</title>
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
            text-align: right;
        }
        nav span{
            margin-right: auto;
            
        }

        div {
            margin-top: 20px;
        }

        span {
            color: white;
        }
    </style>
</head>
<body>
    <nav>
        <span>CrisaFit | PT View<span>
        <a href="login.php">Logout</a>
    </nav>

    <div class="container">
            <span><h2>Benvenuto, <?php echo $_SESSION["nome"]; ?></h2></span>
    </div>
</body>
</html>