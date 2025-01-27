<?php 

    $bmiIsSubmitted = isset($_POST["submit"]);

    if($bmiIsSubmitted){

        $peso =  $_POST["weight"];
        $altezza =  $_POST["height"];

        $result = $peso / (2 * ($altezza / 100));
        $info = showMass($result);

    }

    function showMass( string $result) : string {

        $output = "$result";

        return $output;

    }

?>