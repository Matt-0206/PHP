<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>For Each01</title>

    </head>

    <body>
        
        <?php 
        
            $book = [

                'title' => 'Promnessi Sposi',
                'author' => 'Manzoni',
                'publisher' => 'Einaudi'

            ];

            foreach ($book as $key => $value){

                echo "$key: $value <br>";

            }

        ?>

    </body>

</html>