<?php

    require_once 'includes/connection.php';
    $conn = dbConnect('read');

    // Interrogo il Database
    $sql = 'SELECT * FROM images'; //L'asterisco selezione TUTTI gli elementi dalla tabella indicata

    // Esegue la query creata in precedenza e salva il risultato in $result
    $result = $conn->query($sql); 

    // Gestione degli errori
    $error = $conn->errorInfo()[2]; 

    if (!$error) {

        $numRows = $result->rowCount();

    }

?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title></title>

    </head>

    <body>

        <?php
        
            if ($error) {

                echo "<p>$error</p>";

            } else {

                echo "<p>Nella tabella ci sono $numRows righe</p>";

            }

        ?>

    </body>

</html>