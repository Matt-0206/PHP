<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Data Type</title>

    </head>

    <body>
        
        <?php 
        
            /*$fruit = '2 mele';
            $veg = 'e 4 carote';
            
            echo $fruit + $veg;*/

            //var_dump restituisce sempre il tipo di dato

            $number = 123;
            var_dump($number); //restituisce int, abbreviativo di integer (numero)

            $float = 123.8;
            var_dump($float); //restituisce float (numero con la virgola)

            $languages = ['albanese', 'inglese', 'italiano'];
            var_dump($languages); //restituisce array

            $ok = true;
            var_dump($ok); //restituisce bool, abbreviativo di boolean (booleano)

            $notOk = false;
            var_dump($notOk); //restituisce bool, abbreviativo di boolean (booleano)

            $nuovaVariabile;
            var_dump($nuovaVariabile); //restituisce null, non c'è un valore dichiarato nella variabile

        ?>

    </body>

</html> 