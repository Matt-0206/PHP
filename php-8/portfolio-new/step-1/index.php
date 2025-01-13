<? php 

    $pageData = new stdClass();
    $pageData -> title = "Nuovo sito Portfolio";
    $pageData -> content = "<h1>Benvenuti!</h1>";

    require "templates/pages.php";

    echo $page;

?>