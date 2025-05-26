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

    public function loadForm(){

        require __DIR__ . '/../views/aggiungi_libro.php';

    }

    public function store(){

        if( isset($_POST['titolo'], $_POST['autore'], $_POST['anno'], $_POST['stato']) ){

            $this->bookModel->new( $_POST['titolo'], $_POST['autore'], $_POST['anno'], $_POST['stato'] );

        }

        header("Location: index.php");

    }

}