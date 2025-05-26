## LOGICA DELL'APPLICAZIONE 'Studenti' - Parte 1


### MODEL

Per collegarsi al db il model deve includere il file db.php, ecco perchè prima di tutto inserisco:


```php

require_once __DIR__ . '/../config/db.php';

```


Il tema principale della nostra app sono gli studenti. Quindi è logico creare una classe di nome 'Studente' che ha i metodi principali legati a quello che dobbiamo ottenere: 

- function tutti() per mostrare tutti gli studenti 
- function trovaPerId($id) per mostrare il singolo id studente.



### CONTROLLER
Il controller fa da ponte tra model e view e gestisce tutta la logica. 

Per collegarsi al model deve includere il file Studente.php, ecco perchè prima di tutto inserisco:


```php

require_once __DIR__ . '/../model/Studente.php';

```


Anche qui creiamo una classe: StudenteController con due metodi principali:

- function lista() che richiama -> tutti();
- function dettaglio($id) che richiama -> trovaPerId($id);

E' importante notare che la classe StudenteController deve creare una nuova istanza della classe Studente che si trova nel file incluso Studente.php; ecco perchè questo codice:

```php

// Costruttore: creo una sola volta l'istanza di Studente
    public function __construct() {
        $this->studenteModel = new Studente();
    }

```


A questo punto creo le due funzioni principali:


```php

 public function lista() {
        // Recupero gli studenti dal modello
        $studenti = $this->studenteModel->tutti();
        
        // Carico la vista della lista studenti
        require __DIR__ . '/../view/lista_studenti.php';
    }

```

lista() richiama la funzione tutti() e contemporaneamente carica la view corretta. Ecco perchè il controller fa da ponte tra model e view. Notare che qui la mia variabile si chiama $studenti (plurale)



```php

 public function dettaglio($id) {
        // Recupero i dettagli dello studente dal modello
        $studente = $this->studenteModel->trovaPerId($id);
        
        // Carico la vista dei dettagli dello studente
        require __DIR__ . '/../view/dettaglio_studente.php';
    }

```

dettaglio($id) chiama la funzione trovaPerId($id) presente sul model e contemporaneamente richiama la view opportuna: dettaglio_studente.php

Notare che qui la mia variabile si chiama $studente (singolare)


### INDEX
File fondamentale, fa partire tutta l'applicazione, creando un'istanza della classe StudenteController() che si trova in StudenteController.php. Per far questo devo prima includere il file controller:


```php

 require_once __DIR__ . '/controller/StudenteController.php';

```


index.php deve capire se caricare la lista con tutti gli studenti o solo il dettaglio del singolo studente.

All'avvio dell'applicazione il browser carica semplicemente la lista con tutti gli studenti. Questo perchè non gli viene passato via get nessun parametro, quindi viene attivato:

```php

 else {
    $controller->lista();
}

```


Se però un utente clicca sul link 'dettaglio' ecco che nell'url viene passato a index.php il parametro dettaglo e id. In questo caso in index.php si attiva la prima parte dell'if:


```php

 if ($action === 'dettaglio' && $id) {
    $controller->dettaglio($id);
}

```

e quindi chiamiamo la funzione 'dettaglio' che si trova sul controller.


