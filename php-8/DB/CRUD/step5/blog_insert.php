<?php 

    if (isset($_POST['insert'])) {

        require_once "../includes/connection.php";
        $OK = false;
        // creazione database connnection
        $conn = dbConnect('write');
    
        // creazione della query
        $sql = 'INSERT INTO blog (title, article)
                VALUES(:title, :article)';

        $stmt = $conn -> prepare($sql); // prepara una query ma non la esegue direttamente

        $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
        $stmt->bindParam(':article', $_POST['article'], PDO::PARAM_STR);

        $stmt->execute();
        $OK = $stmt->rowCount();

        if ($OK){

            header('Location: http://localhost/php-8/DB/CRUD/step5/blog_list.php');
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