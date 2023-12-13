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
        <div class="welcome-message">
            <?php
            if (isset($_GET['nome'])) {
                $username = htmlspecialchars($_GET['username']);
                echo "Welcome, $username!";
            } else {
                echo "Username non valido.";
            }
            ?>
        </div>
    </div>

</body>
</html>


