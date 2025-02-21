<?php
require_once '../includes/connection.php';
require_once '../includes/utility_funcs.php';

// initialize flags
$OK = false;


// create database connection
$conn = dbConnect('write');

/*
La riga if (isset($_GET['article_id']) && !$_POST) sta facendo due controlli importanti:

isset($_GET['article_id']) verifica se esiste un parametro 'article_id' nell'URL (ad esempio: blog.php?article_id=123)



Primo caricamento della pagina (via GET):

L'utente arriva alla pagina tramite un URL tipo blog_update.php?article_id=123
In questo momento $_POST è vuoto (!$_POST è true)

Quando il form viene inviato (via POST):

Quando l'utente clicca "Update Entry", il form viene inviato in POST
In questo momento !$_POST è false (perché ci sono dati POST)
Il codice dentro l'if NON viene eseguito

*/


// get details of selected record
if (isset($_GET['article_id']) && !$_POST) {

    // Prepara una query SQL protetta con un placeholder (?)
    $sql = 'SELECT article_id, title, article FROM blog WHERE article_id = ?';

    $stmt = $conn->prepare($sql);

    // Esegue la query sostituendo il placeholder con l'ID dell'articolo
    $OK = $stmt->execute([$_GET['article_id']]);

    // bind the results
    $stmt->bindColumn(1, $article_id);
    $stmt->bindColumn(2, $title);
    $stmt->bindColumn(3, $article);

    // Recupera i dati nel record
    $stmt->fetch();
}


// redirect if $_GET['article_id'] not defined
if (!isset($_GET['article_id'])) {
    $url = 'http://localhost/php-8/Powers/cap-15_managing-content-RIFATTO/step4/blog_list.php';
    header("Location: $url");
    exit;
}

// il terzo if serve solo per gestire l'errore
if (isset($stmt)) {
    // get error message (will be null if no error)
    $error = $stmt->errorInfo()[2];
}



?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Blog Entry</title>
    <link href="../styles/admin.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Update Blog Entry</h1>
<p><a href="blog_list.php">List all entries </a></p>

<?php 

if (isset($error)) {
    echo "<p class='warning'>Error: $error</p>";
}


if($article_id == 0) { ?>

    <p class="warning">Invalid request: record does not exist.</p>


<?php } else { ?>
<!-- il blocco precedente, chiude graffa if e apre graffa else -->

<form method="post" action="blog_update.php">
    <p>
        <label for="title">Title:</label>
        <input name="title" type="text" id="title" value="<?= safe($title); ?>">
    </p>
    <p>
        <label for="article">Article:</label>
        <textarea name="article" id="article"><?= safe($article);?></textarea>
    </p>
    <p>
        <input type="submit" name="update" value="Update Entry">
        <input name="article_id" type="hidden" value="<?= $article_id; ?>">
    </p>
</form>


<?php } ?>

<!-- chiusura dell'else -->


</body>
</html>