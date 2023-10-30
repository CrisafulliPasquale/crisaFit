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


SCHEMA ER:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/8b9f6754-25d7-4d1c-8f54-895f79a94077)



Pagina iniziale visibile all'utente:

![Screenshot 2023-10-30 122036](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/87fe733e-bb34-4e1e-a138-21079b3c506d)

Pagina di (registrazione)/accesso dell'utente:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/e63e546a-4aa9-41ca-be1a-6b5e94440f81)

Pagina di registrazione/(accesso) dell'utente:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/7c392175-5c0f-40d9-a5d1-e952ad52dadb)

Pagina visibile al gestore: in questa sezione il gestore assegna degli esercizi al cliente (può impostare serie, recupero e una breve descrizione sull'esecuzione dell'esercizio), l'esercizio riquadrato è quello attualmente selezionato:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/b425881a-4cb8-4ac0-9575-49eec3e002d9)

Pgina visibile al gestore: in questa sezione il gestore può ricercare un cliente per nome, cognome o località: i clienti sono memorizzati in un database rappresentato nell'immagine in questione:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/c8dbb0a6-7010-47d7-80e0-bf9698d589d6)












