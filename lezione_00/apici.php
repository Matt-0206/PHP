<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Apici</title>

    </head>

    <body>
        
        <?php 
        
        //forma errata, l'apostrofo va in contrastro con gli apici che dichiarano la stringa

        /*$descrizione = 'Davids's House'; 
        echo $descrizione;*/

        //forma corretta, soluzione 1 (backslash, escape character)
        $descrizione = 'Davids\'s House'; 
        echo $descrizione;

        //forma corretta, soluzione 2 (singolo apice all'interno di un doppio apice)
        $descrizione = "Davids's House"; 
        echo $descrizione;

        //forma errata, il doppio apice va in contrasto con gli altri doppi apici
        /*$descrizione2 = "La mia casa è "favolosa!" ";
        echo $descrizione2;*/

        //forma correta, uso degli escape characters
        $descrizione2 = "La mia casa è \"favolosa!\" ";
        echo $descrizione2;

        ?>

    </body>

</html> 