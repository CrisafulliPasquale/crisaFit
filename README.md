# CrisaFit
# Descrizione

webapp palestra, applicazioni per il fitness e per le persone che vogliono cambiare il proprio fisico

# Funzionalità

-registrazione/accesso cliente

-cancellare il proprio account

-mostrare le varie tariffe di abbonamento 

-mostrare la pagina di "contatti"

-reindirizzare al tipo di contatto selezionato

-poter trovare un determinato cliente cercando per nome, cognome o località nelle pagine visibili al gestore/personal trainer

-poter creare un tipo di abbonamento 

-spazio in cui poter assegnare una scheda di allenamento (interfaccia web drag & drop) di durata dipendente dall'abbonamento




# SCHEMA ER:


![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/a2870df9-c941-40a7-94ce-b650893f4a83)








# SCHEMA RELAZIONALE
# Entità
Costo(<ins>ID</ins>, metodo_pagamento, entita_prezzo)

Abbonamento(<ins>ID</ins>, inizio, fine, Costo_ID, Gestore_ID, Cliente_ID) 

Esercizio(<ins>ID</ins>, serie, recupero, ripetizioni)

Gestore(<ins>ID</ins>, nome, cognome, password, e-mail, codice_fiscale, paese)

Cliente(<ins>ID</ins>, nome, cognome, password, e-mail, paese)

# relazione
compone(<ins>Abbonamento_ID</ins>, <ins>esercizio_ID</ins>)

# MOCK-UP


Pagina iniziale visibile all'utente:

![Screenshot 2023-10-30 122036](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/87fe733e-bb34-4e1e-a138-21079b3c506d)

Pagina di (registrazione)/accesso dell'utente:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/e63e546a-4aa9-41ca-be1a-6b5e94440f81)

Pagina di registrazione/(accesso) dell'utente:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/7c392175-5c0f-40d9-a5d1-e952ad52dadb)

Pagina visibile al gestore: in questa sezione il gestore assegna degli esercizi al cliente (può impostare serie, recupero e una breve descrizione sull'esecuzione dell'esercizio), l'esercizio riquadrato è quello attualmente selezionato:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/b425881a-4cb8-4ac0-9575-49eec3e002d9)

Pagina visibile all'utente: in questa schermata l'utente visualizza la scheda con gli esercizi assegnati dal gestore:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/b4cab2d0-49cb-401f-8a65-9f581cd149d6)


Pgina visibile al gestore: in questa sezione il gestore può ricercare un cliente per nome, cognome o località: i clienti sono memorizzati in un database rappresentato nell'immagine in questione:

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/c8dbb0a6-7010-47d7-80e0-bf9698d589d6)

Pagina visibile all'utente che mostra le varie tariffe offerte dal sito:

![tariffe](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/15fb2a7d-f797-4a35-b9eb-f229b5e42593)


# Come avviare il progetto: 

PREREQUISITI: avere un account git, avviare il docker

aprire il codespace dal repository git  ->  

sul terminale del codespace  ->
```
docker run --name myXampp -p 41061:22 -p 41062:80 -d -v /workspaces/crisaFit:/www tomsik68/xampp:8 
```
cliccare nella sezione "PORTE" e successivamente sull'icona della sfera  ->

una volta aperta la pagina di XAMPP aprire "PhpMyAdmin" per gestire il database  ->

per testare il funzionamento invece, nella stringa di ricerca digitare "www/frontend/registerUser.php" al posto di "dashboard"  ->


# Modello SQL 

```
CREATE TABLE IF NOT EXISTS Abbonamento (
  ID INTEGER PRIMARY KEY,
    fine DATE,
    inizio DATE
);

CREATE TABLE IF NOT EXISTS Costo(
  ID INTEGER PRIMARY KEY,
  metodo_pagamento VARCHAR(30),
  entita_prezzo CURRENCY
);

CREATE TABLE IF NOT EXISTS Esercizio (
  ID INTEGER PRIMARY KEY,
  serie INTEGER,
  ripetizioni INTEGER,
  recupero DATE
);

CREATE TABLE IF NOT EXISTS Cliente (
  ID INTEGER PRIMARY KEY,
    nome VARCHAR(30) UNIQUE,
    cognome VARCHAR(30),
    paese VARCHAR(50),
    password VARCHAR(255),
    e_mail VARCHAR(100),
);

CREATE TABLE  IF NOT EXISTS Gestore (
  ID INTEGER PRIMARY KEY,
    nome VARCHAR(255),
    cognome VARCHAR(255),
    password VARCHAR(255),
    paese VARCHAR(255),
    e_mail VARCHAR(255),
    codice_fiscale VARCHAR(255)
);
```








