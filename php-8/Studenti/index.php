<?php
require_once __DIR__ . '/controller/StudenteController.php';

$controller = new StudenteController();

$action = $_GET['action'] ?? 'lista';
$id = $_GET['id'] ?? null;

if ($action === 'dettaglio' && $id) {
    $controller->dettaglio($id);
} else {
    $controller->lista();
}
