## LOGICA DELL'APPLICAZIONE 'Studenti' - Parte 2


## Aggiungi uno studente

Dare la possibilità all'utente di aggiungere un nuovo studente alla lista studenti.


1 - Vista: ci vuole un nuovo form, quindi una view che chiamiamo aggiungi_studente.php. Si accede alla view cliccando un link dalla pagina della lista, appena sotto il titolo principale 'Studenti';

2 - Controller: Il controller deve dirigere tutto: nuovo metodo che chiamiamo loadForm() che carica semplicemente la view.
IMPORTANTE: Il controller deve anche recuperare le variabili che gli vengono inviate via post dal form ed inviarle al modello. Quindi chiama il metodo nuovo() del modello, inviandogli i dati in post ottenuti dal form. Fa il suo lavoro di ponte tra la view e il model.

3 - Modello: prende i dati che gli vengono inviati dal controller e li inserisce nel db. Nuova query al db, quindi, un metodo nuovo() nel modello.

4 - Index: in qualche modo index deve intercettare l'azione del form e chiamare il controller. Miglioramenti: il codice nel router ha troppi elseif; vedere come renderlo più semplice da leggere.


### Sviluppo

Nella lista, si sarebbe tentati di inserire un link diretto alla nuova view, del tipo:

``` html
<p><a href="aggiungi_studente.php">Aggiungi un nuovo studente</a></p>

```

ma questo non funzionerebbe.

Bisogna passare dal router, e per questo dobbiamo caricare la view con il form:

```html

<p><a href="index.php?action=loadForm">Aggiungi un nuovo studente</a></p>

```


