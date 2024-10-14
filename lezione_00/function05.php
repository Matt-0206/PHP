<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Functions05</title>

    </head>

    <body>
        
        <?php 

            function doubleIt($number){

                return $number *= 2;

            }
            
            $num = 4;

            $doubled = doubleIt($num);

            echo '$num is: ' . $num . '<br>';
            echo '$doubled is: ' . $doubled . '<br>';

            //arrow function

            $creaSomma = fn ($num2) => $num2 + $num2;

            echo $creaSomma(11);

        ?>

    </body>

</html>