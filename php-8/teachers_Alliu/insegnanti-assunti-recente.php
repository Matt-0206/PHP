<?php 

    require_once 'connection/connection.php';
    require_once 'connection/utility_funcs.php';
    $conn = dbConnect('read');

    $sql = 'SELECT * FROM teachers
            ORDER BY school ASC';   

    $result = $conn->query($sql);

    $error = $conn->errorInfo()[2]; 

    if (!$error) {

        $numRows = $result->rowCount();

    }

?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>salario-alto</title>

    </head>

    <body>
        
    <?php

    if ($error) {

        echo "<p>$error</p>";

    }else{

        echo "<p>Nella tabella sono presenti $numRows records</p>";

    ?>

    <table>

    <tr>

        <th>Last Name</th>
        <th>School</th>
        <th>Hire Date</th>

    </tr>

    <?php

    foreach($conn->query($sql) as $row) { ?> 

    <tr>
        <td><?= $row['last_name'] ?></td>
        <td><?= safe($row['school']) ?></td>
        <td><?= safe($row['hire_date']) ?></td>
    </tr>

    <?php } ?>

    </table>

    <?php } ?>

    </body>

</html>