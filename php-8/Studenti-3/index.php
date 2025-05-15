<?php
// Incorpora 'StudenteController.php'
require_once __DIR__ . '/controller/StudenteController.php';

// Crea un'istanza del controller
$controller = new StudenteController();

//Creaiamo due variabili
$action = $_GET['action'] ?? 'lista';
$id = $_GET['id'] ?? null;

if ($action === 'dettaglio' && $id) {

    $controller->dettaglio($id);

} elseif ($action === 'modifica' &&  $id ) { //modifica uno studente

    $controller->modifica($id);

} elseif ($action === 'loadForm' ) { //aggiunge nuovo studente

    $controller->loadForm();
    
}elseif ( $action === 'store' ){ //registra il nuovo studente

    $controller->store();

} else {

    $controller->lista();

}
