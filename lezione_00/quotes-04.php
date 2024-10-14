

<?php

//Modello più semplice con cui creare un array associativo, rispetto a quello già visto nel file arrays.php

    $book = [

        'title'     =>      'Harry Potter',
        'author'    =>      'J. K. Rowling',
        'publisher' =>      'Harper Collins'

    ];

// Inserendo le parentesi graffe alla fine e all'inizio della chiamata della variabile, si risolve il problema.   
echo "{$book['title']} è stato scritto da {$book['author']}";


?>


