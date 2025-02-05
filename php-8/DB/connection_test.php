<?php

    require_once 'includes/connection.php';

    if ($conn = dbConnect('read') ) {

        echo 'Connessione avvenuta con successo!';

    }

?>