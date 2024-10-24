<?php
include_once "views/navigation.php";
include_once "classes/Page_Data.class.php";


$pageData = new Page_Data();
$pageData->title = "Matteo Alliu Portfolio";
$pageData->css = " <link href='css/layout.css' rel='stylesheet' type='text/css' /> ";

//mette la navigazione nel contenuto
$pageData->content = $nav;

//aggiunta
$navigationIsClicked = isset($_GET['page']); // isset verifica se una variabile è definita (esiste) e non è null (non esiste), get page serve ad accedere alla variabile che abbiamo messo nel link

if ($navigationIsClicked){

    $fileToLoad = $_GET['page'];

}else{

    $fileToLoad = "skills";

}

include_once "views/$fileToLoad.php";
$pageData->content .= $info;

require "templates/page.php";
echo $page

?>