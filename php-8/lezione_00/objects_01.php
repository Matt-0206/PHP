<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Objects00</title>

    </head>

    <body>
        
        <?php 
        
            class Fruit{

                public $name; // "public" rende le variabili pubbliche all'interno del codice, si usa se vengono usate più volte all'interno del codice.
                public $color;  // "public" rende le variabili o i metodi accessibili all'interno e all'esterno della classe

                function __construct($name){ //quando si crea un constructor si usano due underscore all'inizio

                    $this->name = $name;

                }

                function __destruct(){ 

                    echo "Addio da {$this->name}.";

                }

            }

            $apple = new Fruit("Apple");

        ?>

    </body>

</html>