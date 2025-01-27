<?php 
        
    // prendo il percorso del file
    $filename = 'C:/privates/sonnet.txt';

    //apro il file
    $file = fopen($filename, 'r'); // fopen => f(ile)open

    //leggo il file 
    $contents = fread($file, filesize($filename)); // fread => nome_file, quanto_deve_leggere

    //chiudo il file
    fclose($file);

    echo nl2br($contents);

?>