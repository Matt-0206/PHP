<?php 
        
    // prendo il percorso del file
    $filename = 'C:/privates/sonnet.txt';

    //apro il file
    $file = fopen($filename, 'r'); // fopen => f(ile)open

    //variabile per inserire il contenuto 
    $contents = '';

    // legge il file
    while (!feof($file)){

        $contents .= fgets($file);

    }

    //chiude il file e lo stampa formattato

    fclose($file);

    echo nl2br($contents);

?>