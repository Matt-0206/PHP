<?php
require_once '../includes/connection.php';
require_once '../includes/utility_funcs.php';
// create database connection
// in questo caso non serve 'prepare', perchè non ci sono variabili
$conn = dbConnect('read');
$sql = 'SELECT * FROM blog ORDER BY created DESC';
$result = $conn->query($sql);
$error = $conn->errorInfo()[2];
?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Manage Blog Entries</title>
    <link href="../styles/admin.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Manage Blog Entries</h1>
<p><a href="blog_insert.php">Insert new entry</a></p>

<?php 

if (isset($error)) {
    echo "<p>$error</p>";
} else  { 

// notare il trucco della graffa NON chiusa!!!


// ======= AGGIUNTA
    
    if (isset($_GET['updated'])) {
        echo '<p>Record updated</p>';
    }


// ======= FINE AGGIUNTA

    ?>



<table>
    <tr>
        <th>Created</th>
        <th>Title</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>


    <?php while ($row = $result->fetch()) { ?>
    <tr>
        <td><?= $row['created'] ?></td>
        <td><?= safe($row['title']) ?></td>
        <td><a href="blog_update.php?article_id=<?= $row['article_id'] ?>">EDIT</a></td>
        <td><a href="blog_delete.php?article_id=<?= $row['article_id'] ?>">DELETE</a></td>
    </tr>
    <?php } ?>


</table>


<?php } ?>

<!-- è la chiusura dell'else!!! -->

</body>
</html>