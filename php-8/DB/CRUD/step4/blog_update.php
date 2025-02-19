<?php

require_once '../includes/connection.php';
require_once '../includes/utility_funcs.php';


$OK = false;

$conn = dbConnect('write');

if (isset($_GET['article_id']) && !$_POST){

    // prepara una query SQL protetta con un placeholder
    $sql = 'SELECT article_id, title, article FROM blog WHERE article_id = ?';

    $stmt = $conn->prepare($sql);

    $OK = $stmt->execute([$_GET['article_id']]);


    $stmt->bindColumn(1, $article_id);
    $stmt->bindColumn(2, $title);
    $stmt->bindColumn(3, $article);

    $stmt->fetch();



}


if (!isset($_GET['article_id'])){

    $url = 'http://localhost/php-8/DB/CRUD/step4/blog_list.php';
    header("Location: $url");
    exit;


}


if (isset($stmt)){


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


if (isset($error)){

    echo "<p class='warning'>Error: $error </p>";

}


if ($article_id == 0) { ?>

    <p class="warning">Richiesta non valida, il record non esiste</p>


<?php } else { ?>


<form method="post" action="blog_update.php">
    <p>
        <label for="title">Title:</label>
        <input name="title" type="text" id="title" value="<?= safe($title);?>">
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

</body>
</html>