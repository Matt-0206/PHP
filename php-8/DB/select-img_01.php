<?php
require_once 'includes/connection.php';
require_once 'includes/utility_funcs.php';
$conn = dbConnect('read');
$getImages = 'SELECT image_id, filename FROM images';
?>


<!--  

popola una select con i nomi delle immagini contenuti in un DB




-->

<!DOCTYPE HTML>
<html>
<head>
    <meta  charset="utf-8">
    <title>Select img</title>
    <style>
        figure {
            margin: 30px;
            display:block;
        }
        figcaption {
            font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-weight:bold;
            display:inline-block;
            max-width:250px;
            margin:10px;
        }
    </style>
</head>



<body>
<form action="" method="get">
    <select name="selected_img">

        <?php foreach ($conn->query($getImages) as $row){ //apertura for each?>    

            <option value=" <?= $row['image_id'] ?> " >

                    <?= safe($row[ 'filename' ]) ?>
                    
            </option>

        <?php } //chiudo il foreach ?>
        


    </select>
    <input type="submit" name="go" value="Display">
</form>
</body>



</html>