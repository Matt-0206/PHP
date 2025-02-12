<?php

require_once 'includes/connections-formaggi.php';

$conn = dbConnect('read');

$sql = 'SELECT * FROM cheeses';

$result = $conn->query($sql);

$error = $conn->errorInfo()[2]; //Se si presenta un errore, lo prende e lo mostrerà, serve il terzo elemento

if (!$error) {  //Gli diciamo di contare le righe di $result

    $numRows = $result->rowCount();  // Crea una variabile numero di righe, per sapere il numero di righe della tabella,
                                    // crea questa variabile solo se errore non c'è, allora stampa il numero di righe, il punto esclamativo inverte la condizione  
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>

    <?php

    if ($error) { // Se invece c'è l'errore stampa la stringa dell'errore.

        echo "<p>$error</p>";

    } else {


        echo "<p>Nella tabella ci sono $numRows righe</p>";

    }



    ?>

</body>

</html>
