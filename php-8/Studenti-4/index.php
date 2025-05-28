<?php

// E' la prima pagina ad essere caricata e si chiama Router, instrada tutte le funzioni che vengono chiamate

// Incorpora 'StudenteController.php'
require_once __DIR__ . '/controller/StudenteController.php';

// Crea un'istanza del controller
$controller = new StudenteController();

//Creaiamo due variabili
$action = $_GET['action'] ?? 'lista'; // condizione abbreviata "if {} else {}". Controlla l'azione (ovvero "action") invocata con $_GET e la esegue, se non è presente invoca 'lista'
$id = $_GET['id'] ?? null; // Prende il valore 'id' di ogni studente, se non è presente imposta '$id' a 'null'

if ($action === 'dettaglio' && $id) {

    $controller->dettaglio($id);

} elseif ($action === 'modifica' &&  $id ) { //modifica uno studente

    $controller->modifica($id);

} elseif ($action === 'loadForm' ) { //aggiunge nuovo studente

    $controller->loadForm();
    
}elseif ( $action === 'store' ){ //registra il nuovo studente

    $controller->store();

} elseif ( $action === 'elimina' && $id ){ //registra il nuovo studente

    $controller->elimina($id);

} else {

    $controller->lista();

}
