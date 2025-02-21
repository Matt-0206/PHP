<?php
require_once '../includes/connection.php';
require_once '../includes/utility_funcs.php';

// create database connection
$conn = dbConnect('write');

// initialize flags
$OK = false;
$deleted = false;

// get details of selected record
if (isset($_GET['article_id']) && !$_POST) {
    // prepare SQL query
    $sql = 'SELECT article_id, title, created FROM blog WHERE article_id = ?';
    $stmt = $conn->prepare($sql);
    // pass the placeholder value to execute() as a single-element array
    $OK = $stmt->execute([$_GET['article_id']]);
    // assign result array to variables
    $stmt->bindColumn(1, $article_id);
    $stmt->bindColumn(2, $title);
    $stmt->bindColumn(3, $created);
    // fetch the result
    $stmt->fetch();
    $error = $stmt->errorInfo()[2];
}

// ========================  AGGIUNTA

// se l'utente ha cliccato sul pulsante 'delete' nel form di questa pagina...
// allora viene cancellato il record inviato dal form con il campo nascosto!

if (isset($_POST['delete'])) {
    $sql = 'DELETE FROM blog WHERE article_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_POST['article_id']]);

    // get number of affected rows
    $deleted = $stmt->rowCount();

    if (!$deleted) {
        $error = 'There was a problem deleting the record. ';
        $error .= $stmt->errorInfo()[2];
    }
}

// redirect the page if deleted, cancel button clicked, or $_GET['article_id'] not defined

if ($deleted || isset($_POST['cancel_delete']) || !isset($_GET['article_id']))  {
    header('Location: http://localhost/php-8/DB/CRUD/step7/blog_list.php');
    exit;
}



?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Delete Blog Entry</title>
    <link href="../styles/admin.css" rel="stylesheet" type="text/css">
</head>



<body>

<h1>Delete Blog Entry </h1>

<!-- 

Se ci sono errori, stampali, altrimenti fai comparire il paragrafo di warning, il titolo dell'articolo da cancellare, la data e ora di creazione dell'articolo

Poi fa comparire il bottone per la cancellazione solo se è stata settata la variabile $article_id

Fa comparire il bottone 'Cancel'

E crea un campo nascosto.

Questo campo nascosto svolge un ruolo cruciale nel processo di eliminazione dell'articolo. Ecco perché è necessario:

Mantenimento dell'ID durante il processo: Quando l'utente arriva inizialmente alla pagina, l'ID dell'articolo viene preso dall'URL tramite $_GET['article_id']. Tuttavia, quando il form viene inviato, questi dati GET andrebbero persi. Il campo nascosto assicura che l'ID dell'articolo venga mantenuto e inviato con il form.

Sicurezza nella transazione: Quando l'utente clicca sul pulsante "Confirm Deletion", il codice ha bisogno di sapere quale articolo eliminare. Il campo nascosto passa questa informazione in modo sicuro attraverso $_POST['article_id'], che viene poi usato nella query DELETE:


$sql = 'DELETE FROM blog WHERE article_id = ?';
$stmt = $conn->prepare($sql);
$stmt->execute([$_POST['article_id']]);



 -->


<?php

// gestione errori
if (isset($error)) {
    echo "<p class='warning'>Error: $error</p>";
} elseif (isset($article_id) && $article_id == 0) { ?>
    <p class="warning">Invalid request: record does not exist.</p>

<!-- chiude elseif e apre la graffa di else -->
<?php } else { ?> 


<!-- scrive un paragrafo di warning in rosso -->
    <p class="warning">Per piacere, conferma che vuoi cancellare il seguente articolo. Questa azione non può essere annullata.</p>


    <p><?= safe($title) . ' - Data e ora di creazione: ' . $created ?></p>

<!-- chiusura dell'else -->
<?php } ?>


<form method="post" action="blog_delete.php">


    <p>

<!-- Fa comparire il bottone 'Confirm deletion' solo se $article_id è arrivato con la url variable -->

        <?php if (isset($article_id) && $article_id > 0) { ?>

            <input type="submit" name="delete" value="Confirm Deletion">

        <?php } ?>


<!-- Fa comparire il bottone 'Cancel' -->        

        <input name="cancel_delete" type="submit" value="Cancel">



<!-- Crea un campo nascosto cioè tramanda il valore di article_id-->
        <?php if (isset($article_id) && $article_id > 0) { ?>

            <input name="article_id" type="hidden" value="<?= $article_id; ?>">

        <?php } ?>


    </p>



</form>


</body>




</html>
