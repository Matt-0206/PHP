<?php 

$title = basename($_SERVER['SCRIPT_FILENAME'], '.php'); //Prende il nome del file ($_SERVER['SCRIPT_FILENAME']) e toglie l'estensione (.php)

//$title = str_replace(search, replace, subject);

$title = str_replace('_', ' ', $title);

if($title == 'index'){

    $title = 'home';

}

$title = ucwords($title); //Rende la prima lettera di una parola MAIUSCOLA (uc sta per Upper Case)