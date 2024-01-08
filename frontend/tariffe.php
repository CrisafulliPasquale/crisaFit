<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: ../frontend/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Contatti</title>
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
            color: #333;
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

        div {
            margin-top: 20px;
        }

        span {
            color: white;
        }

        #platino {
            background-color: #E5e4e2;
            color: black;
        }

        #oro {
            background-color: #d6a315;
            color: white;
        }

        #argento {
            background-color: #c0c0c0;
            color: white;
        }

        button {
            background-color: #e6720e;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff9a44;
        }
    </style>
</head>
<body>
    <nav>
        <span>CrisaFit | Tariffe</span>
        
        <a href="../frontend/userpage.php">MyAccount</a>
        <a href="../frontend/contatti.php">Contatti</a>
        <a href="../frontend/login.php">Esci</a>
    </nav>

    <div class="container" id="argento">
        <h2>Abbonamento Silver</h2>
        <h3>Prezzo: 50€/mese</h3>
        <h4>Cosa include?</br> Scheda di allenamento</h4>
        <a href='../frontend/pagamento.php'><button>ACQUISTA ORA</button></a>
    </div>


    <div class="container" id="oro">
        <h2>Abbonamento Gold</h2>
        <h3>Prezzo: 100€/mese</h3>
        <h4>Cosa include?</br> Scheda di allenamento con video-spiegazioni</h4>
        <a href='../frontend/pagamento.php'><button>ACQUISTA ORA</button></a>
    </div>

    <div class="container" id="platino">
        <h2>Abbonamento Platinum</h2>
        <h3>Prezzo: 200€/mese</h3>
        <h4>Cosa include?</br> Scheda di allenamento con video-spiegazione e assistenza 24h</h4>
        <a href='../frontend/pagamento.php'><button>ACQUISTA ORA</button></a>
    </div>
</body>
</html>