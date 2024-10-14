<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Objects00</title>

    </head>

    <body>
        
        <?php 
        
            class Fruit{

                public $name; // "public" rende le variabili pubbliche all'interno del codice, si usa se vengono usate più volte all'interno del codice
                public $color;

                function __construct($name, $color, $price){ //quando si crea un constructor si usano due underscore all'inizio

                    $this->name = $name;
                    $this->color = $color;
                    $this->price = $price;

                }

                function get_name(){

                    return $this->name;
                
                }

                function get_color(){

                    return $this->color;
                
                }

                function get_price(){

                    return $this->price;
                
                }

            }

            $apple = new Fruit("Apple", "Red", '0.50€');

            echo $apple->get_name() . '<br>' . $apple->get_color() . '<br>' . $apple->get_price(); 

        ?>

    </body>

</html>