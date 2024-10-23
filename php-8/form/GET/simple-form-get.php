<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Form</title>

    </head>

    <body>

        <form action="welcome-get.php" method="GET">

            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">

        <!--L'informazione spedita con il form GET è visibile a tutti (tutte le variabili sono mostrate nell'URL). I
            l metodo GET limita anche la quantità dell'informazione spedita (al massimo 2000 caratteri spediti).
            GET si usa per spedire dati NON SENSIBILI -->

        </form>

        <?php 
        
        ?>

    </body>

</html>