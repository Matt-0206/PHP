<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Es1</title>

    </head>

    <body>
        
        <?php 
        
            class Car{

                public $make;
                public $model;
                public $year;

                public function __construct($make, $model, $year){

                    $this->make = $make;
                    $this->model = $model;
                    $this->year = $year;

                }

                public function start(){

                    echo "L'automobile {$this->make} {$this->model} dell'anno {$this->year} è partita";         

                }

            }

            $volvo = new Car("Volvo", "XC90", "2024");
            echo $volvo->start() . '<br>';

            $maserati = new Car("Maserati", "GT2 Stradale", "2024");
            echo $maserati->start();

        ?>

    </body>

</html> 