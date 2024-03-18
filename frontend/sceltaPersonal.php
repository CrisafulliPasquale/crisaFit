<html lang="en">
<head>
    <link rel="stylesheet" href="../frontend/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrisaFit | Scegli il personal </title>
</head>
<body>

    <nav>
        <span>CrisaFit | Scegli il personal </span>  
        <a href="login.php">Logout</a> 
    </nav>

    <?php
        session_start();

        $servername = "";
        $username = "root";
        $password = "";
        $dbname = "crisaFit";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Gestore";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='card' onclick=\"window.location.href='../frontend/userpage.php?ID=" . $row['ID'] . "'\">";
                echo "<h2>" . $row['nome'] . " " . $row['cognome'] . "</h2>";
                echo "<p>" . $row['e_mail'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "Non ci sono personal trainer disponibili.";
        }

        $conn->close();
    ?>

</body>
</html>