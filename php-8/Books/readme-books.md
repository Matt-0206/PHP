
# Gestore di Libri - Progetto PHP MVC

## Descrizione del Progetto

Il progetto **Gestore di Libri** è una semplice applicazione web per catalogare i libri letti o da leggere. Consente agli utenti di:

- Aggiungere un libro con titolo, autore, anno di pubblicazione e stato (letto/non letto).
- Visualizzare l'elenco dei libri.
- Modificare o eliminare un libro.

### Struttura del progetto

```
Books/
  ├── config/
  │   └── database.php
  ├── controllers/
  │   └── bookController.php
  ├── models/
  │   └── book.php
  ├── views/
  │   └── catalogo.php
  └── index.php

```


### Creazione db database in phpMyAdmin

Crea un database `mvc_books` e una tabella `books` con la seguente struttura:

titolo - autore - anno - stato

per creare un campo 'stato' ecco il codice SQL:

    stato ENUM('letto', 'non letto') NOT NULL


Popolate il database con quattro libri di prova.