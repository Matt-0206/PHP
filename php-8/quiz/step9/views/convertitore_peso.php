<?php 

    $pesoIsSubmitted = isset($_POST["peso-submit"]);

    if($pesoIsSubmitted){

        $peso =  $_POST["weight"];

        $result = $peso / 1000;
        $info = calculateGrams($result);

    }

    function calculateGrams( string $result) : string {

        $output = "$result";

        return $output;

    }

?>