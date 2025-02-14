<?php 

    require_once 'connection/connection.php';
    $conn = dbConnect('read');

    $sql = 'SELECT * FROM teachers';

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

        <title>Numero Righe</title>

    </head>

    <body>
        
        <?php 
        
            if ($error) {
            
                echo "<p>$error</p>";
            
            } else {
            
                echo "<p>Nella tabella sono presenti $numRows records</p>";
            
            }

        ?>

    </body>

</html>