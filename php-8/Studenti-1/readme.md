# Studenti

Realizzare una mini applicazione PHP con pattern MVC per:

- Visualizzare un elenco di studenti (nome, cognome).

- Visualizzare i dettagli di ciascuno (email, telefono).


## Struttura delle cartelle

studenti/
|
├── config/
│   └── db.php
│
├── controller/
│   └── StudenteController.php
│
├── model/
│   └── Studente.php
│
├── view/
│   ├── lista_studenti.php
│   └── dettaglio_studente.php
│
├── index.php



## PRIMO STEP: PREPARAZIONE DB

In phpMyAdmin creare un nuovo db: mvc_studenti

Da pannello SQL eseguire la query:

``` sql

CREATE TABLE studenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(50),
    email VARCHAR(100),
    telefono VARCHAR(20)
);

INSERT INTO studenti (nome, cognome, email, telefono) VALUES

('Mario', 'Rossi', 'mario.rossi@email.com', '1234567890'),
('Luca', 'Bianchi', 'luca.bianchi@email.com', '0987654321');

```



## SECONDO STEP: CREAZIONE DIRECTORY ALL'INTERNO DEL FOLDER php-8
Copiare la cartella 'Studenti' all'interno del folder 'php-8'