<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Array Associativi</title>
</head>

<body>


<?php

//Modello più semplice con cui creare un array associativo, rispetto a quello già visto nel file arrays.php

$movie = [

'titolo' => 'Inception',
'regista' => 'Christopher Nolan',
'attore' => 'Leonardo Di Caprio'

];

echo "{$movie['titolo']} è stato diretto da {$movie['regista']}, con la presenza di {$movie['attore']}.";



?>


</body>

</html>