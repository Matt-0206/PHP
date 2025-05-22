<?php
require_once __DIR__ . '/../models/book.php';

class BookController {

    private $bookModel;

    public function __construct() {
        $this->bookModel = new Book();
    }

    public function lista() {

        $books = $this->bookModel->all();
        require __DIR__ . '/../views/catalogo.php';
    }

    public function dettaglio($id) {

        $book = $this->bookModel->findID($id);
        require __DIR__ . '/../views/dettaglio_libro.php';
    }

    public function elimina($id){

        $this->bookModel->deleteID($id);
        header("Location: index.php");

    }
}