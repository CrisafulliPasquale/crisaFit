<?php
    session_start();
    if(isset($_POST["nome"]) && isset($_POST["password"])){
        header('Location: ../frontend/login.php');
    }
?>

<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #e6720e;
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

    .container {
        padding: 20px;
        margin: 20px;
        border-radius: 8px;
    }

    .container form{
        max-width: 690px;
        margin: 0 auto;
        background-color: black;
        border-radius: 16px;
        padding: 40px;
    }

    form {
        margin-top: 20px;
    }

    label {
        color: white;
    }

    input {
        margin-top: 5px;
        padding: 8px;
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #e6720e;
        border-radius: 4px;
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
        margin-top: 10px;
        position: center;
    }

    button:hover {
        background-color: #ff9a44;
    }
    .centre{
        text-align: center;
    }
</style>
<html>
<body>
    <nav>
        <span>CrisaFit | Pagamento</span>
        <a href="../frontend/tariffe.php">Esci</a>
    </nav>

    <div class="container">
        <form method="POST" action="../backend/pagamentoController.php">
            <label for="numero_carta">Numero Carta:</label>
            <input type="text" name="numero_carta" id="numero_carta" required>

            <label for="scadenza_carta">Scadenza Carta:</label>
            <input type="text" name="scadenza_carta" id="scadenza_carta" required>

            <label for="cvv_carta">CVV Carta:</label>
            <input type="text" name="cvv_carta" id="cvv_carta" required>

            <div class="centre">
                <button type="submit">Paga</button>
            </div>
        </form>
    </div>
</body>
</html>
