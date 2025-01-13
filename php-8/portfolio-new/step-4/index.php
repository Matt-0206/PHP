<?php 

    include_once "views/navigation.php";
    $pageData = new stdClass();
    $pageData->title = "Nuovo sito Portfolio";
    $pageData->content = $nav;

    $naivgationIsClicked = isset($_GET['page']);


    if ($naivgationIsClicked) {

        $fileToLoad = $_GET['page'];

        include_once "views/$fileToLoad.php";

        $pageData->content .= $info;

    }

    require "templates/page.php";

    echo $page;

?>