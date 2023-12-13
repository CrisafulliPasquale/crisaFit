CREATE TABLE Costo(
  ID INTEGER PRIMARY KEY,
  metodo_pagamento VARCHAR(30),
  entita_prezzo CURRENCY
);

CREATE TABLE Esercizio (
  ID INTEGER PRIMARY KEY,
  serie INTEGER,
  ripetizioni INTEGER,
  recupero DATE
);

CREATE TABLE Cliente (
  ID INTEGER PRIMARY KEY,
    nome VARCHAR(30),
    cognome VARCHAR(30),
    paese VARCHAR(50),
    password VARCHAR(255),
    e_mail VARCHAR(100),
    PRIMARY KEY (e_mail, password)
);

CREATE TABLE Gestore (
  ID INTEGER PRIMARY KEY,
    nome VARCHAR(255),
    cognome VARCHAR(255),
    paese VARCHAR(255),
    e_mail VARCHAR(255),
    codice_fiscale VARCHAR(255),
    partita_iva VARCHAR(255),
);

CREATE TABLE Abbonamento (
  ID INTEGER PRIMARY KEY,
    fine DATE,
    inizio DATE
);
