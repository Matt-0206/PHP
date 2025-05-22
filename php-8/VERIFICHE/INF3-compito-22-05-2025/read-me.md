
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

id - titolo - autore - anno - stato

per creare un campo 'stato' ecco il codice SQL:

    stato ENUM('letto', 'non letto') NOT NULL


- Popolare il database con cinque libri di prova in base alla tabella fornita.

- Creare una pagina di dettaglio di ogni singolo libro

- Visualizzare la tabella dei libri con id decrescente (da 5 a 1)

- Inserire un pulsante 'elimina' che consente di cancellare il libro selezionato.