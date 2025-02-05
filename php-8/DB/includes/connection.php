<?php

    function dbConnect ($usertype) {

        $host = 'localhost';
        $db = 'phpsol';

        if ($usertype == 'read') {

            $user = 'psread';
            $pwd = 'lupo'; 

        } elseif ($usertype == 'write') {

            $user = 'pswrite';
            $pwd = 'faina'; 

        } else {

            exit('Utente non riconosciuto');

        }

        // connessione al DB

        try {

            return new PDO("mysql:host=$host;dbname=$db;", $user, $pwd); //crea un collegamento tramite PDO al database  dandogli hostname, nome_db, username e password

        } catch (PDOException $e) { // se si presenta un errore viene "catturato"

            echo $e->getMessage(); // stampa l'errore

        }

    }

?>