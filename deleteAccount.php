<?php
	include "connection.php";

	$la_query = "delete from anagrafica";
	echo("La mia query [<span style='font-weight:bold;'>".$la_query."</span>]<br/><br/>");
	
	if ($connessione->query($la_query))
		echo "Record(s) cancellato(i): ".$connessione->affected_rows;
	else
		echo "Errore: ".$la_query."<br/>".$connessione->error;
	$connessione->close();
?>