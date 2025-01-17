<?php

include_once "views/navigation.php";
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Form with php";

// mette la navigazione nel contenuto
$pageData->content .= $nav;

$pageData->content .= "<div>...ed anche un form, proprio qui.</div>";



require "templates/page.php";
echo $page;
?>
