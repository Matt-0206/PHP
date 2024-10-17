<!DOCTYPE html>
<html>

    <head>

        <meta charset = "utf-8">

        <title>Es2</title>

    </head>

    <body>
        
        <?php 
        
            class Car{

                public $make;
                public $model;
                public $year;

                public function __construct($make, $model, $year, $speed){

                    $this->make = $make;
                    $this->model = $model;
                    $this->year = $year;
                    $this->speed = $speed;

                }

                public function start(){

                    echo "L'automobile {$this->make} {$this->model} dell'anno {$this->year} è partita";         

                }

                public function accelerate(){

                    $acceleration = $this->speed + 10;
                    echo "La velocità attuale era {$this->speed} ora è {$acceleration}";

                }

            }

            $volvo = new Car("Volvo", "XC90", "2024", 100);
            echo $volvo->start() . '<br>';
            echo $volvo->accelerate() . '<br>';

            $maserati = new Car("Maserati", "GT2 Stradale", "2024", 170);
            echo $maserati->start(). '<br>';
            echo $maserati->accelerate() . '<br>';

            $ferrari = new Car("Ferrari", "SF90 Stradale", "2024", 200);
            echo $ferrari->start(). '<br>';
            echo $ferrari->accelerate() . '<br>';

            $bentley = new Car("Bentley", "Continental GT Range", "2024", 180);
            echo $bentley->start(). '<br>';
            echo $bentley->accelerate() . '<br>';

        ?>

    </body>

</html>