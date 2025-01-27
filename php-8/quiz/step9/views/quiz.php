<?php

    $quizIsSubmitted = isset($_POST["quiz-submitted"]);

    if($quizIsSubmitted){

        $answer = $_POST["answer"];
        $answer2 = $_POST["answer2"];

        $info = showQuizResponse($answer, $answer2);

        // $info .= "<pre>";
        // $info .= print_r($_POST, true);
        // $info .= "</pre>";

    }else{

        include_once"views/quizform.php";

    }

    function showQuizResponse( string $answer,$answer2 ) : string{

        $response = "<p>Hai risposto $answer, alla prima risposta</p>";
        $response .= "<p>Hai risposto $answer2, alla seconda risposta</p>";
        $response .= "<p><a href='index.php?page=quiz'>Vuoi riprovare?</a></p>";

        return $response;

    }

?>