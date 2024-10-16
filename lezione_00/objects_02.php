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

                public function __construct($name, $color){ //quando si crea un constructor si usano due underscore all'inizio

                    $this->name = $name;
                    $this->color = $color;

                }

                public function intro(){

                    echo "Il frutto è {$this->name} e il colore è {$this->color}.";

                }

            }

            //sub-class, eredita dalla classe fruit (extends)

            class Strawberry extends Fruit{

                public function message(){

                    echo "Sono perfetta sulle torte!";

                }

            }

            // nuova sottoclasse

            class Banana extends Fruit{

                public function message(){

                    echo "Sono lunga!";

                }

            }

            $strawberry = new Strawberry ("Fragola", "Rosso"); //creo un istanza

            echo $strawberry->message() . '<br>';

            echo $strawberry->intro() . '<br>'; 

            $banana = new Banana ("Banana", "Gialla");

            echo $banana->message() . '<br>';

            echo $banana->intro();

        ?>

    </body>

</html>