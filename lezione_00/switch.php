<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Switch</title>
</head>

<body>


<?php

/* Modello di switch in PHP, è lo stesso.

switch (variabile da testare){

    case valore1:
        azioni da eseguire.
        break;

    case valore2:
        azioni da eseguire.
        break;

    default:
        azioni da eseguire.

};

*/ 

//Creazione Switch, testa tra vari casi 

$myVar = 2;


switch ($myVar){

    case 1:
        echo '$myVar è 1';
        break;

    case 'arancia':
        echo '$myVar è un frutto';
        break;

    default:
        echo '$myVar non è un frutto e non è 1.';

};

?>


</body>

</html>