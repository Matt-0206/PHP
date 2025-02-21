
# Managing content - CRUD - gli steps.

Ci sono quattro pagine separate:

- inserimento
- aggiornamento
- lista dei posts
- cancellazione

La lista dei posts ha due funzioni principali: avere una lista degli articoli presenti nel DB. Inserire un nuovo post. Linkare all'update e al delete script, passando la primary key attraverso una query string.



## Step 0 - IMPORTAZIONE TABELLA BLOG.SQL

La prima cosa da fare è importare in phpMyAdmin la struttura della tabella 'blog', utilizzando blog.sql



## Step 1 - CREAZIONE DELLE PAGINE INSERT E UPDATE

In blog_insert.php c'è la struttura base del form di inserimento.
In blog_update.php il form è simile: cambia l'input: 

```
<input type="submit" name="update" value="Update Entry">

```

## Step 2 - AGGIUNTA CODICE PER CONNETTERSI AL DB E FARE LA QUERY

In blog_insert.php c'è la query, che inserisce nella colonna 'title' e 'article' i valori delle due variabili :title e :article

  ```
    $sql = 'INSERT INTO blog (title, article)
            VALUES(:title, :article)';

  ```          

è da notare che il form come action richiama la stessa pagina: blog_insert.php

La pagina è funzionante: inserisce il nuovo articolo nella tabella phpMyAdmin.


### Metodo prepare()
In PHP, il metodo prepare() è una funzione importante per la sicurezza e l'efficienza quando si lavora con database. Ecco cosa fa:

Prepara una query SQL per l'esecuzione, ma non la esegue immediatamente. Il $sql contiene la query con dei segnaposto (placeholders) che verranno sostituiti più tardi con i valori reali.
Vantaggi principali:

Previene SQL Injection: I valori vengono "sanitizzati" automaticamente
Performance migliori: Il database può riutilizzare lo stesso piano di esecuzione per query simili
Codice più pulito: Separa la struttura della query dai dati


Esempio pratico:

```
// Query con placeholder
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);

// Poi si usano i bind e execute
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

```


Per vedere se funziona veramente è necessario anche creare 'blog_list.php'



## Step 3 - CREAZIONE DELLA PAGINA blog_list

Si parte da una versione base (solo per vedere l'html della pagina...):

- blog_list-struttura.php

poi si crea:

- blog_list.php

Che ha lo scopo di listare tutte le entry presenti nel DB. Lo fa attraverso un loop. 

```
<?= $row['created'] ?> 

```

inserisce la data e l'ora di ogni entry. 

```
<?= safe($row['title']) ?> 

```

inserisce il titolo di ogni entry.

La cosa interessante è che viene passato l'article id di ogni articolo nel link di 'update' e 'delete':

```
blog_update.php?article_id=<?= $row['article_id'] ?>

```

Fare il mouse-over sui links per vedere cosa vuol dire!!!



## Step 4 - UPDATING RECORDS v.1

La pagina di update è importante, e deve fare due cose:

- riprendere il record selezionato e mostrarlo per fare la modifica.
- aggiornare il record nel DB

Nella seconda versione della pagina 'blog_update.php' oltre alla connessione al DB, facciamo comparire il titolo e il testo del post con <?= safe($title); ?> e <?= safe($article);?>

Inseriamo anche un hidden field 'article_id' nel form, perchè l'UPDATE command ha bisogno di conoscere la primary key del record che vogliamo modificare.

- A questo punto, possiamo testare: se dalla lista degli articoli clicco 'update' vado al post giusto con il testo già inserito. 

- Non succede ancora niente se clicco su update. Passo allo step successivo.



## Step 5 - UPDATING RECORDS v.2

Modifica a blog_update.php: ora ci sono i comandi SQL per fare l'update del record, e il redirect dopo che ho aggiornato l'entry.

A questo punto si modifica anche blog_list.php dove si inserisce un messaggio per fare capire che il record è stato aggiornato:

```
if (isset($_GET['updated'])) {
        echo '<p>Record updated</p>';
    }

```

Se testo partendo dalla lista, funziona tutto.



## Step 6 - DELETING RECORDS v.1

Per prima cosa creiamo il form sulla pagina.

Se ci sono errori, stampali, altrimenti fai comparire il paragrafo di warning, il titolo dell'articolo da cancellare, la data e ora di creazione dell'articolo

Poi fa comparire il bottone per la cancellazione solo se è stata settata la variabile $article_id

Fa comparire il bottone 'Cancel'

E crea un campo nascosto necessario per dirgli quale articolo cancellare.

Non funziona ancora, si va allo step 7


## Step 7 - DELETING RECORDS v.2

Si aggiunge il codice con cui ci connettiamo al db e cancelliamo il record.
Viene poi fatto un redirect alla pagina della lista.