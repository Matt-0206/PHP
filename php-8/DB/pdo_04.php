<?php
// Includo utility_funcs.php al file
require_once 'includes/utility_funcs.php';
require_once 'includes/connection.php';
$conn = dbConnect('read');  //INvoca la funzione per connettersi al database, tra parentesi l'account con cui entreremo.

$sql = 'SELECT * FROM images ORDER BY caption'; //NON è PHP è codice SQL ed è il codice con cui si parla al database. Tutte le parole chiave vanno scritte tutte in maiuscolo
//Ora $sql prende tutta la tabella dal database ma secondo l'ordine di caption.

// esegue la query e salva il risultato in $result
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

    



    ?>

<!-- creo una tabella in HTML -->
<table>


<!-- Parte statica della tabella, i titoli -->
    <tr>
        <th>image_id</th>
        <th>filename</th>
        <th>caption</th>
    </tr>





<?php

//creo un forloop che crea più volte le righe di una tabella, prendendo i dati dal database genera la tabella automaticamente
foreach($conn->query($sql) as $row) { ?> 

<!-- Parte dinamica della tabella -->
    <tr>
        <td><?= $row['image_id'] ?></td>
        <td><?= safe($row['filename']) ?></td>
        <td><?= safe($row['caption']) ?></td><!--utilizza la funzione safe creata in utility_fucs.php-->
    </tr>

    <?php } ?>
<!-- Graffa che chiude il foreach -->

</table>

<?php } ?>
<!-- Graffa che chiude IF -->

</body>
</html>