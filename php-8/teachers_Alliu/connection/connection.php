<?php

    function dbConnect ($usertype) {

        $host = 'localhost';
        $db = 'analysis';

        if ($usertype == 'read') {

            $user = 'aread';
            $pwd = 'lupo'; 

        } elseif ($usertype == 'write') {

            $user = 'awrite';
            $pwd = 'faina'; 

        } else {

            exit('Utente non riconosciuto');

        }

        try {

            return new PDO("mysql:host=$host;dbname=$db;", $user, $pwd);

        } catch (PDOException $e) {

            echo $e->getMessage();

        }

    }

?>