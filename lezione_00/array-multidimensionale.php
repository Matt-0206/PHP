

<?php

//Modello di array multidimensionale.

    $books = [

        [
        'title'     =>      'Harry Potter',
        'author'    =>      'J. K. Rowling'
        ],

        [
        'title'     =>      'I promessi sposi',
        'author'    =>      'A. Manzoni'
        ]

    ];

//Stampare l'autore del secondo libro contenuto nell'array books, ovvero A. Manzoni.    $books[1]['author']    
 
echo "L'autore de {$books[1]['title']} è {$books[1]['author']}";


?>


