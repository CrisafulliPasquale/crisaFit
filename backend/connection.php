<?php
//  	Connessione al DBMS e selezione del database.
//
// 	nome dell'host
//
$host = "localhost";
//
// 	username dell'utente in connessione
//
$nome = "root";
//
// 	password dell'utente
//
$password = "";
//
// nome del database
//
$db = "crisaFit";
//
// 	Istanza dell'oggetto della classe MySQLi
//
$conn = new mysqli($host, $nome, $password, $db);
//
// 	Verifica su eventuali errori di connessione
//
if ($conn->connect_errno)
{
    echo("Connessione fallita: ".$conn->connect_error.".");
    exit();
}
?>