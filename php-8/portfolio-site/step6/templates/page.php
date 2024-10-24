<?php 
        
$page = "

<!DOCTYPE html>
<html>

    <head>

        <title>$pageData->title</title>
        
        <meta charset = 'utf-8'>
        $pageData->css
        $pageData->embeddedStyle

    </head>

<body>
        
    $pageData->content

</body>

</html> ";

?>