<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Switch_01</title>
</head>

<body>


<?php

$color = 'rosso';

switch($color){

    case 'rosso':
        echo 'rosso';
        break;
    
    case 'verde':
        echo 'verde';
        break;

    default:
        echo 'colore non contemplato';
        break;


}

?>


</body>

</html>