<?php

function safe($text){

    return htmlspecialchars($text, double_encode: false);//impedisce la codifica di alcuni simboli come la @.

}


// $testo = "Ciao <b>mondo</b>";

// //echo $testo;

// echo htmlspecialchars($testo); // pulisce il codice trasformando per esempio i simboli maggiore e minore
//                                // Serve anche come sicurezza per impedire l'eseguimento di script malevoli.

?> 