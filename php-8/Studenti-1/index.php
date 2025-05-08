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
} else {
    $controller->lista();
}
