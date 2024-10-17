<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Functions04</title>

    </head>

    <body>
        
        <?php 

            function doubleIt($number){

                $number *= 2;

                echo 'Dentro la funzione $number è ' . $number . '<br>';

            }
            
            $number = 4;

            doubleIt($number);

            echo 'Fuori dalla funziona $number è ' . $number .'<br>';


        ?>

    </body>

</html>