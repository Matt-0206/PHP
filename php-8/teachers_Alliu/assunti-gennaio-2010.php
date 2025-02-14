<?php 

    require_once 'connection/connection.php';
    require_once 'connection/utility_funcs.php';
    $conn = dbConnect('read');

    $sql = 'SELECT * FROM teachers WHERE hire_date >= "2010-01-01" ORDER BY salary DESC';

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

        <th>First Name</th>
        <th>Last Name</th>
        <th>Hire Date</th>
        <th>Salary</th>

    </tr>

    <?php

    foreach($conn->query($sql) as $row) { ?> 

    <tr>
        <td><?= $row['first_name'] ?></td>
        <td><?= $row['last_name'] ?></td>
        <td><?= $row['hire_date'] ?></td>
        <td><?= safe($row['salary']) ?></td>
    </tr>

    <?php } ?>

    </table>

    <?php } ?>

    </body>

</html>