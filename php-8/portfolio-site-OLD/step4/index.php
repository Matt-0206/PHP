<?php
include_once "views/navigation.php";
$pageData = new stdClass(); // classe generica (std = standard)

$pageData->title = "Matteo Alliu Portfolio";

//mette la navigazione nel contenuto
$pageData->content = $nav;

//aggiunta
$navigationIsClicked = isset($_GET['page']); // isset verifica se una variabile è definita (esiste) e non è null (non esiste), get page serve ad accedere alla variabile che abbiamo messo nel link

if ($navigationIsClicked){

    //$fileToLoad = $_GET['page'];
    //$pageData->content .= "<p>Presto caricheremo $fileToLoad.php</p>"; //aggiunge un paragrafo
    //$pageData->content .= "<p>Benvenuti!</p>";

    $fileToLoad = $_GET['page'];
    include_once "views/$fileToLoad.php";
    $pageData->content .= $info;

}

require "templates/page.php";
echo $page

?>