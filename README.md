# CrisaFit
# Descrizione

webapp palestra, applicazioni per il fitness e per le persone che vogliono cambiare il proprio fisico

# Funzionalità - BACK END

-registrazione/accesso cliente ✔️

-registrazione/accesso Personal Trainer (gestore) ✔️

-mostrare le varie tariffe di abbonamento ✔️

-mostrare la pagina di "contatti" e reindirizzare al tipo di contatto selezionato ✔️

-Personal trainer diversi possono avere più clienti diversi ✔️

-I clienti hanno un personal trainer e ne visualizzano le rispettive informazioni ✔️

# Funzionalità - FRONT END

-scelta del personal trainer ✔️

-mostrare i contatti al cliente ✔️

-poter trovare un determinato cliente cercando per nome, cognome o località nelle pagine visibili al gestore/personal trainer

-poter eliminare un determinato cliente ✔️

-poter aggiungere un determinato cliente

-poter creare una tariffa ✔️

-poter cancellare una tariffa ✔️

-il cliente può ottenere una tariffa o più ✔️





# SCHEMA ER:


![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/fd0943b9-236e-464d-bac0-93f99ed9bb67)









# SCHEMA RELAZIONALE
# Entità

Abbonamento(<ins>ID</ins>, inizio, fine, Costo_ID, Gestore_ID, Cliente_ID) 

Esercizio(<ins>ID</ins>, serie, recupero, ripetizioni)

Gestore(<ins>ID</ins>, nome, cognome, password, e-mail, codice_fiscale, paese)

Cliente(<ins>ID</ins>, nome, cognome, password, e-mail, paese)

Tariffa(<ins>ID</ins>, nome, descrizione, prezzo)

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

per testare il funzionamento invece, nel caso di un cliente, nella stringa di ricerca digitare "www/frontend/registerUser.php" al posto di "dashboard"  ->

nel caso di un personal trainer, nella stringa di ricerca digitare "www/frontend/registerOwner.php" al posto di "dashboard"  ->

CREDENZIALI PER CLIENTE: e-mail: testcliente@gmail.com
                         password: cliente
CREDENZIALI PER CLIENTE: e-mail: crisafullim48@gmail.com
                         password: pasquale05             


# Modello SQL 

```
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mar 30, 2024 alle 13:06
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crisaFit`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Cliente`
--

CREATE TABLE `Cliente` (
  `ID` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cognome` varchar(30) DEFAULT NULL,
  `paese` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `e_mail` varchar(100) DEFAULT NULL,
  `gestore_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Cliente`
--

INSERT INTO `Cliente` (`ID`, `nome`, `cognome`, `paese`, `password`, `e_mail`, `gestore_id`) VALUES
(19, 'Simone', 'Arzuffi', 'ITALIA', '50eadfb263785c630137ca628b183aee', 'simone.arzuffi05@gmail.com', 8),
(21, 'cliente', 'cliente', 'ITALIA', '4983a0ab83ed86e0e7213c8783940193', 'testcliente@gmail.com', 7);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD KEY `gestore_id` (`gestore_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Cliente`
--
ALTER TABLE `Cliente`
  ADD CONSTRAINT `Cliente_ibfk_1` FOREIGN KEY (`gestore_id`) REFERENCES `Gestore` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




```








