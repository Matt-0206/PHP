<?php
function dbConnect($usertype) {
    $host = 'localhost';
    $db = 'phpsol';
    if ($usertype  == 'read') {
        $user = 'psread';
        $pwd = 'lupo';
    } elseif ($usertype == 'write') {
        $user = 'pswrite';
        $pwd = 'faina';
    } else {
        exit('Unrecognized user');
    }

// connessione al db
 
        try {
            return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    
}