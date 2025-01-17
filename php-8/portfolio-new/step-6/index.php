<?php
include_once "views/navigation.php";
include_once "views/footer.php";
include_once "classes/Page_Data.class.php";

$pageData = new Page_Data();


$pageData->title = "Gioele Specogna portfolio";
$pageData->css = "<link href='css/layout.css' rel='stylesheet'>";

//mette la navigazione nel contenuto della pagina.
$pageData->content = $nav;

$navigationIsClicked = isset($_GET['page']);

if ($navigationIsClicked) {


    $fileToLoad = $_GET['page'];

   

}else{

    $fileToLoad = "home";


}


include_once "views/$fileToLoad.php";

$pageData->content .= $info;

$pageData->content .= $foot;

$pageData->embeddedStyle = $style;


require "templates/page.php";

echo $page;

?>