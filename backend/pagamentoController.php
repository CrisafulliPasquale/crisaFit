<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crisaFit";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numeroCarta = mysqli_real_escape_string($conn, $_POST['numero_carta']);
        $scadenzaCarta = mysqli_real_escape_string($conn, $_POST['scadenza_carta']);
        $cvvCarta = mysqli_real_escape_string($conn, $_POST['cvv_carta']);

        $sql = "INSERT INTO Pagamenti (numero_carta, scadenza_carta, cvv_carta) VALUES ('$numeroCarta', '$scadenzaCarta', '$cvvCarta')";
        $result = $conn->query($sql);

        if ($result) {
            header("Location: /www/frontend/confermaPagamento.php");
        } else {
            echo "Errore: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>

