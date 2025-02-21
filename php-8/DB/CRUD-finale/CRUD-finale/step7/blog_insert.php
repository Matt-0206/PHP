<?php

// se il form di questa pagina è stato inviato...

if (isset($_POST['insert'])) {
    require_once '../includes/connection.php';
    // initialize flag
    $OK = false;
    // create database connection
    $conn = dbConnect('write');


    // create SQL

    // inserisce nella colonna 'title' e 'article' i valori delle due variabili :title e :article
    $sql = 'INSERT INTO blog (title, article)
            VALUES(:title, :article)';


    // prepara la query ma non la esegue immediatamente
    $stmt = $conn->prepare($sql);

   
    // collega la variabile pdo :title al campo del form
    // gli diciamo anche il tipo di dato che contiene la variabile
    // cioè stringa (PDO::PARAM_STR)
    $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':article', $_POST['article'], PDO::PARAM_STR);

    // dopo il bind esegue finalmente la query
    $stmt->execute();
    $OK = $stmt->rowCount();

    // dopo aver inserito la nuova entry deve tornare alla blog list con un redirect
    if ($OK) {
        header('Location: http://localhost/php-8/Powers/cap-15_CRUD/step7/blog_list.php');
        exit;
    } else {
        $error = $stmt->errorInfo()[2];
    }
}
?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Insert Blog Entry</title>
    <link href="../styles/admin.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Insert New Blog Entry</h1>

<?php 

if (isset($error)) {
    echo "<p>Error: $error</p>";
} 

?>

<form method="post" action="blog_insert.php">
    <p>
        <label for="title">Title:</label>
        <input name="title" type="text" id="title">
    </p>
    <p>
        <label for="article">Article:</label>
        <textarea name="article" id="article"></textarea>
    </p>
    <p>
        <input type="submit" name="insert" value="Insert New Entry">
    </p>
</form>
</body>
</html>