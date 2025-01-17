<?php

//Funzione che genera un paragrafo.
function getParagraph(){


    return "<p>paragrafo creato da una funzione</p>";

}


$output = getParagraph();

$output .= "<h1>Titolo principale</h1>";

$output .= getParagraph();



echo $output;

echo getParagraph();


?>