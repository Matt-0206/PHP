<?php

    $quizIsSubmitted = isset($_POST["quiz-submitted"]);

    if($quizIsSubmitted){

        $answer = $_POST["answer"];
        $info = showQuizResponse($answer);

    }else{

        include_once"views/quizform.php";

    }

    function showQuizResponse( string $answer ) : string{

        $response = "<p>Hai cliccato $answer</p>";
        $response .= "<p><a href='index.php?page=quiz'>Vuoi riprovare?</a></p>";

        return $response;

    }

?>