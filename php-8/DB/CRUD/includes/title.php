<?php
// il seguente codice toglie l'estensione .php dal nome del file.
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
// inoltre se c'è un underscore nel nome del file, lo sostituisce con uno spazio vuoto.
$title = str_replace('_', ' ', $title);
if ($title == 'index') {
    $title = 'home';
}
$title = ucwords($title);

//ucwords da ad ogni parola (nel caso il file sia composto da due parole) una prima lettera maiuscola