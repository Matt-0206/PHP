<?php 

    include_once "views/navigation.php";
    include_once "classes/Page_Data.class.php";

    $pageData = new Page_Data(); //Inizializzo la classe

    $pageData->title = "Nuovo sito Portfolio";
    $pageData->css = "<link href='css/layout.css' rel='stylesheet'>";

    $pageData->content = $nav;

    $naivgationIsClicked = isset($_GET['page']);


    if ($naivgationIsClicked) {

        $fileToLoad = $_GET['page'];



    }else{

        $fileToLoad = "home";

    }

    include_once "views/$fileToLoad.php";

    $pageData->content .= $info;

    require "templates/page.php";

    echo $page;

?>