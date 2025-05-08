
### Config
File che consente di collegarsi al DB (db.php)

```
<?php

$host = 'localhost';
$db = 'mvc_studenti';
$user = 'root';
$pass = 'root';
  
$conn = "mysql:host=$host;dbname=$db";    
	
try {
	$pdo = new PDO($conn, $user, $pass);
} catch (PDOException $e) {
	die("Errore connessione DB: " . $e->getMessage());
}

?>
```

### Model
Per collegarsi al DB il model deve includere il file di collegamento (db.php), ecco perché inserisco:
```
require_once __DIR__ . '/../config/db.php';
```

Il tema principale della nostra app sono gli studenti. Quindi è logico creare una classe 'Studente' che ha metodi principali legati a quello che devo ottenere:

```
function tutti()
```
*Per mostrare tutti gli studenti*

```
function trovarePerId($id)
```
*Per mostrare il singolo studente*


### Controller
Il 'Controller' fa da ponte tra 'Model' e 'View' e gestisce tutta la logica.

Per collegarsi al 'Model' deve includere il file 'Controller' (Studente.php) ecco  perché prima di tutto inserisco:

```
require_once __DIR__ . '/../model/Studente.php';
```

Anche qui creiamo una classe, chiamata 'StudenteController', con due metodi principali:

```
function lista()
```
*Che richiama -> tutti();*

```
function dettaglio($id)
```
*Che richiama -> trovaPerId($id)*

E' importante notare che la classe 'StudenteController' deve creare una nuova istanza della classe Studente che si trova nel file incluso 'Studente.php'.
Ecco perché inserisco questo codice:

```
public function __construct() {
	//Crea l'oggetto Studente
	$this->studenteModel = new Studente();
}
```

A questo punto creo le due funzioni principali: 

```
public function lista() {

	// Recupero gli studenti dal modello
	$studenti = $this->studenteModel->tutti();

	// Carico la vista della lista studenti
	require __DIR__ . '/../view/lista_studenti.php';

}
```

'lista()' richiama la funzione 'tutti()' e contemporaneamente carica la 'View' corretta. Ecco perché il 'Controller' fa da ponte tra 'Model' e 'View'. Notare che qui la mia variabile si chiama '$studenti' (plurale).

```
public function dettaglio($id) {

	// Recupero i dettagli dello studente dal modello
	$studente = $this->studenteModel->trovaPerId($id);

	// Carico la vista dei dettagli dello studente
	require __DIR__ . '/../view/dettaglio_studente.php';

}
```
'dettaglio(id)' chiama la funzione 'trovaPerId($id)' presente sul 'Model' e contemporaneamente richiama la 'View' opportuna, ovvero 'dettaglio_studente.php'.
Notare che qui la mia variabile si chiama '$studente'  (singolare).

### Index
E' un file fondamentale, fa parte tutta l'applicazione, creando un0istanza della classe 'StudenteController()' che si trova in un 'StudenteController.php'. Per far questo devo prima includere il file controller:

```
require_once __DIR__ . '/controller/StudenteController.php';
```

'index.php' deve capire se caricare la lista di tutti gli studenti o solo il dettaglio del singolo studente. All'avvio dell'applicazione il browser carica semplicemente tutta la lista con tutti gli studenti. Questo perché  non gli viene passato via 'get' nessun parametro, quindi viene attivato solo:

```
} else {
    $controller->lista();
}
```

Se però un utente clicca sul link 'Dettaglio'  ecco che nell'URL viene passato a 'index.php' il parametro 'Dettaglio' e 'id'. In questo caso in 'Index.php' si attiva la prima parte dell'if:

```
if ($action === 'dettaglio' && $id) {
	$controller->dettaglio($id);
}
```

e quindi chiamiamo la funzione 'dettaglio($id)' che si trova sul mio 'Controller'.