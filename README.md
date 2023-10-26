# crisaFit

webapp palestra, applicazioni per la gestioni degli abbonamenti di persone che vogliono cambiare il proprio fisico

Cosa devo poter fare?
-registrare un nuovo cliente
-mostrare le varie tariffe
-a seconda della tariffa scelta permettere il pagamento della stessa 
-raccolta di informazione di un cliente una volta registrato e aver effettuato il pagamento
-spazio in cui poter assegnare una scheda di allenamento (file xls) di durata dipendente dall'abbonamento
-salvare tutti i clienti con i dati ricevuti dalla registrazione
-poter trovare un determinato cliente cercando per nome


Gestore:
-email
-password
-nome

Cliente:
-email
-password
-località
-nome
-cognome

Abbonamento:
-prezzo
-validita'
-identificativo

Cardinalità:
-Un cliente possiede un abbonamento (1,1)
-Un abbonamento è posseduto da un Cliente (1,1)
-Un gestore gestisce ogni abbonamento (1,M)
-Ogni abbonamento è gestito da un gestore (M,1)






