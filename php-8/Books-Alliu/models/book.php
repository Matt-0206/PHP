<?php

require_once __DIR__ . '/../config/database.php';

class Book {

    public function __construct() {

        global $pdo;
        $this->pdo = $pdo;

    }

    public function all() {

        $sql = "SELECT id, titolo, autore, anno, stato FROM books ORDER BY id DESC";
        $result = $this->pdo->query($sql);
        return $result->fetchAll();

    }

    public function findID($id) {
        
        $sql = "SELECT * FROM books WHERE id = ?";
        $query = $this->pdo->prepare($sql);          
        $query->execute([$id]);                      
        return $query->fetch();
        
    }

    public function deleteID($id){

        $sql = "DELETE FROM books WHERE id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$id]);

    }

    public function new($titolo, $autore, $anno, $stato){

        $sql = $this->pdo->prepare( "INSERT INTO books (titolo, autore, anno, stato) VALUES (?, ?, ?, ?)" );
        return $sql->execute([$titolo, $autore, $anno, $stato]);

    }

}

?>