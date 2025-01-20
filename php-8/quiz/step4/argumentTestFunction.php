<?php

//Funzione che genera un paragrafo.
function getParagraph( string $content ): string{


    return "<p>$content</p>";

}


$output = getParagraph("Voglio questo testo nel mio primo paragrafo");

$output .= "<h1>Titolo principale</h1>";

$output .= getParagraph("E quest'altro nell'ultimo paragrafo...");
  
echo $output;

echo getParagraph("..ma voglio finire con questo paragrafo...");
    
?>