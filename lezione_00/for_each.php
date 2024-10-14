<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>For Each</title>

    </head>

    <body>
        
        <?php 
        
            //ciclo forach
        
            $shoppingList = ['pane', 'latte', 'uova'];

            foreach($shoppingList as $variabileTemporanea){ // $array as $variabileTemporanea

                echo $variabileTemporanea . '<br>';

            }

        ?>

    </body>

</html>