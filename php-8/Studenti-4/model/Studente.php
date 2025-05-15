<?php

// Model: Si occupa di interagire con il database

// Collego il file che crea la connessione al database
require_once __DIR__ . '/../config/db.php';

class Studente {


    // Costruttore: quando creo un oggetto Studente, salvo la connessione PDO
    public function __construct() {
        global $pdo;       // Prendo la variabile $pdo definita nel file db.php
        $this->pdo = $pdo; // La salvo dentro la classe
    }


    // Restituisce tutti gli studenti (solo nome, cognome e id)
    public function tutti() {
        $sql = "SELECT id, nome, cognome FROM studenti"; // SQL per prendere i dati
        $risultato = $this->pdo->query($sql);             // Eseguo la query
        return $risultato->fetchAll();                    // Ritorno tutti i risultati
    }


    // Restituisce i dati di uno studente usando l'id
    public function trovaPerId($id) {
        $sql = "SELECT * FROM studenti WHERE id = ?";          // SQL con parametro
        $query = $this->pdo->prepare($sql);                     // Preparo la query
        $query->execute([$id]);                                 // Eseguo con il valore di $id
        return $query->fetch();                                 // Ritorno il risultato (uno solo)
    }

    public function nuovo( $nome, $cognome, $email, $telefono ){

        $sql = $this->pdo->prepare( " INSERT INTO studenti (nome, cognome, email, telefono) VALUES (?, ?, ?, ?) " );

        return $sql->execute([$nome, $cognome, $email, $telefono]);
        
    }

    public function aggiorna($id, $dati){

        $sql = "UPDATE studenti SET nome = ?, cognome = ?, email = ?, telefono = ? WHERE id = ?";

        $query = $this->pdo->prepare($sql);

        $query->execute([

            $dati['nome'],
            $dati['cognome'],
            $dati['email'],
            $dati['telefono'],
            $id

        ]);

    }

    public function cancellaId($id){

        $sql = "DELETE FROM studenti WHERE id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$id]);

    }
}