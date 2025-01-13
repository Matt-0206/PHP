<?php
include_once "views/navigation.php";
$pageData = new stdClass(); // classe generica (std = standard)

$pageData->title = "Portfolio test-site";
$pageData->content = $nav;

require "templates/page.php";
echo $page

?>