<?php

function dbConnect($usertype) { //se uno legge e scrvie cambia nome e password

    $host = 'localhost';
    $db = 'food';

    if ($usertype == 'read') { 

        $user = 'fread';
        $pwd = 'read';
    } elseif ($usertype == 'write'){

        $user = 'fwrite';
        $pwd = 'write';
        
    }else{

        exit('Utente non riconosciuto');

    }

    //connessione al DB

    try {

        return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);

    }catch (PDOException $e){


        echo $e->getMessage();
    }

}