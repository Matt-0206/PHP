<?php
require_once '../includes/connection.php';
require_once '../includes/utility_funcs.php';

// initialize flags
$OK = false;
$done = false;

// create database connection
$conn = dbConnect('write');

/*
$_GET['article_id'] è una url variable, $_POST invece manda le variabili all'invio di un form

La riga if (isset($_GET['article_id']) && !$_POST) sta facendo due controlli importanti:

isset($_GET['article_id']) verifica se esiste un parametro 'article_id' nell'URL (ad esempio: blog.php?article_id=123)
!$_POST verifica che NON ci siano dati inviati tramite POST. In altre parole, questa condizione è vera solo quando stiamo visualizzando la pagina, non quando stiamo inviando un form.

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




// ========== AGGIUNTA

// if form has been submitted, update record
if (isset($_POST['update'])) {
    // prepare update query
    $sql = 'UPDATE blog SET title = ?, article = ? WHERE article_id = ?';
    $stmt = $conn->prepare($sql);

    // execute query by passing array of variables
    $done = $stmt->execute([$_POST['title'], $_POST['article'], $_POST['article_id']]);
}

// redirect page on success or $_GET['article_id'] not defined
if ($done || !isset($_GET['article_id'])) {
    $url = 'http://localhost/php-8/Powers/cap-15_CRUD/step7/blog_list.php';
    if ($done) {
        $url .= '?updated=true';
    }
    header("Location: $url");
    exit;
}

// ========== FINE AGGIUNTA




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