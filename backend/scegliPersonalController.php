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

if(isset($_GET['ID'])){
    $idPersonal = $_GET['ID'];
    $_SESSION['selected_trainer_id'] = $idPersonal;
    $mettoID = "UPDATE Cliente SET gestore_id = ? WHERE ID = ?";
    $query = $conn->prepare($mettoID);
    $query->bind_param("ii", $idPersonal, $_SESSION["id"]);
    if($query->execute()){
        header("Location: ../frontend/userpage.php");
    }else{
        echo "query errore";
    }
    $conn->close();
}

?>