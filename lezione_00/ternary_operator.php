<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Ternary Operator</title>

    </head>

    <body>
        
        <?php 
        
        /*$age = 26;

            if ($age >= 16){

                $fareType = 'adulto';

            }else{

                $fareType = "bambino";

            }

        echo $fareType;*/

        $age = 17;

        $fareType  = $age >= 16 ? 'adulto' : 'bambino';

        echo $fareType;

        ?>

    </body>

</html> 