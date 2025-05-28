<?php
require_once __DIR__ . '/../model/Studente.php';

class StudenteController {

    // Variabile per il modello Studente
    private $studenteModel;

    // Costruttore: creo una sola volta l'istanza di Studente
    public function __construct() {
        $this->studenteModel = new Studente();  // Creo l'oggetto una sola volta
    }

    // Metodo per visualizzare la lista di tutti gli studenti
    public function lista() {
        // Recupero gli studenti dal modello
        $studenti = $this->studenteModel->tutti();
        
        // Carico la vista della lista studenti
        require __DIR__ . '/../view/lista_studenti.php';
    }

    // Metodo per visualizzare i dettagli di uno specifico studente
    public function dettaglio($id) {
        // Recupero i dettagli dello studente dal modello
        $studente = $this->studenteModel->trovaPerId($id);
        
        // Carico la vista dei dettagli dello studente
        require __DIR__ . '/../view/dettaglio_studente.php';
    }

    public function loadForm(){

        require __DIR__ . '/../view/aggiungi_studente.php';

    }

    public function store(){

        // isset = controlla se le variabili esistono (sono settate)
        if( isset( $_POST['nome'], $_POST['cognome'], $_POST['email'], $_POST['telefono'] ) ){
            
            // chiama  la funzione "nuovo" e gli passa tutti i dati che l'utente ha inserito
            $this->studenteModel->nuovo( $_POST['nome'], $_POST['cognome'], $_POST['email'], $_POST['telefono'] );

        }

        header("Location: index.php");

    }

    public function modifica($id){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){ // quando modifico e salvo la modifica (Form con metodo POST), intercetta i dati cambiati

            $dati = [

                'nome'=>$_POST['nome'],
                'cognome'=>$_POST['cognome'],
                'email'=>$_POST['email'],
                'telefono'=>$_POST['telefono']

            ];

            $this->studenteModel-> aggiorna($id, $dati);
            header("Location: index.php");
            exit;

        } else { // Carica la view quando il pulsante dettagli è premuto

            $studente = $this->studenteModel->trovaPerId($id);
            require __DIR__ . '/../view/modifica_studente.php';

        }

    }

    public function elimina($id){

        $this->studenteModel->cancellaId($id);
        header("Location: index.php");

    }
}
