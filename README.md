# CrisaFit
# Descrizione

webapp palestra, applicazioni per il fitness e per le persone che vogliono cambiare il proprio fisico

# Funzionalità - BACK END

-registrazione/accesso cliente ✔️

-registrazione/accesso Personal Trainer (gestore) ✔️

-mostrare le varie tariffe di abbonamento ✔️

-Personal trainer diversi possono avere più clienti diversi ✔️

-I clienti hanno un personal trainer e ne visualizzano le rispettive informazioni ✔️

# Funzionalità - FRONT END

-scelta del personal trainer ✔️

-poter trovare un determinato cliente cercando per nome, cognome o località nelle pagine visibili al gestore/personal trainer

-poter eliminare un determinato cliente ✔️

-poter aggiungere un determinato cliente

-poter creare una tariffa ✔️

-poter cancellare una tariffa ✔️

-il cliente può ottenere una tariffa o più ✔️





# SCHEMA ER:


![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/4585fb10-e6fe-416c-bce7-66b25e01e4bd)











# SCHEMA RELAZIONALE
# Entità

Gestore(<ins>ID</ins>, nome, cognome, email, password, codice_fiscale, paese);

Cliente(<ins>ID</ins>, nome, cognome, password, email, paese);

Tariffa(<ins>ID</ins>, nome, descrizione, prezzo)

# relazioni

crea(<ins>id_gestore</ins>);

ottiene(<ins>id_cliente</ins>,<ins>id_tariffa</ins>)

# MOCK-UP

![image](https://github.com/CrisafulliPasquale/crisaFit/assets/101709329/f4865e9b-2e8b-455a-ae6d-5ce0cbfff8f7)



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

copiare questo codice sql ->

# Modello SQL 

```
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mar 30, 2024 alle 13:12
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

-- --------------------------------------------------------

--
-- Struttura della tabella `Gestore`
--

CREATE TABLE `Gestore` (
  `ID` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cognome` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `paese` varchar(255) DEFAULT NULL,
  `e_mail` varchar(255) DEFAULT NULL,
  `codice_fiscale` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Gestore`
--

INSERT INTO `Gestore` (`ID`, `nome`, `cognome`, `password`, `paese`, `e_mail`, `codice_fiscale`) VALUES
(7, 'Pasquale', 'Crisafulli', 'c1ae054939f5f7d41b56ca89f17be95b', 'ITALIA', 'crisafullim48@gmail.com', 'CRSPQL05M25A638M'),
(8, 'Samuele', 'Labollita', 'c1d8380789bbd3a4b16a3cb0e3afc2bb', 'ITALIA', 'samulabo05@gmail.com', 'LBLSLD05C11A794D');

-- --------------------------------------------------------

--
-- Struttura della tabella `Ottiene`
--

CREATE TABLE `Ottiene` (
  `id_cliente` int(11) NOT NULL,
  `id_tariffa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Ottiene`
--

INSERT INTO `Ottiene` (`id_cliente`, `id_tariffa`) VALUES
(18, 24),
(18, 19),
(21, 19);

-- --------------------------------------------------------

--
-- Struttura della tabella `Tariffa`
--

CREATE TABLE `Tariffa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descrizione` text DEFAULT NULL,
  `prezzo` decimal(10,2) NOT NULL,
  `gestore_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Tariffa`
--

INSERT INTO `Tariffa` (`id`, `nome`, `descrizione`, `prezzo`, `gestore_id`) VALUES
(19, 'COACHING SILVER', 'Durata: 10 settimane. solo scheda allenamento \r\n\r\n', 99.00, 7),
(24, 'COACHING GOLD', 'Durata: 15 settimane solo allenamento', 500.00, 7);

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
-- Indici per le tabelle `Gestore`
--
ALTER TABLE `Gestore`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `Tariffa`
--
ALTER TABLE `Tariffa`
  ADD PRIMARY KEY (`id`),
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
-- AUTO_INCREMENT per la tabella `Gestore`
--
ALTER TABLE `Gestore`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `Tariffa`
--
ALTER TABLE `Tariffa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Cliente`
--
ALTER TABLE `Cliente`
  ADD CONSTRAINT `Cliente_ibfk_1` FOREIGN KEY (`gestore_id`) REFERENCES `Gestore` (`ID`);

--
-- Limiti per la tabella `Tariffa`
--
ALTER TABLE `Tariffa`
  ADD CONSTRAINT `Tariffa_ibfk_1` FOREIGN KEY (`gestore_id`) REFERENCES `Gestore` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


```

per testare il funzionamento invece, nel caso di un cliente, nella stringa di ricerca digitare "www/frontend/registerUser.php" al posto di "dashboard"  ->

nel caso di un personal trainer, nella stringa di ricerca digitare "www/frontend/registerOwner.php" al posto di "dashboard"  ->


CREDENZIALI PER CLIENTE: e-mail: testcliente@gmail.com
                         password: cliente
                         
CREDENZIALI PER CLIENTE: e-mail: crisafullim48@gmail.com
                         password: pasquale05             










