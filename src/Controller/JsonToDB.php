<?php

include_once(__DIR__.'/../Model/ModelManager.php');

function JsonToDb( $questions, $reponse1, $reponse2 , $reponse3, $reponse4 ,$validation)

    {
        $manager = new ModelManager();
        $manager -> addQuestions($questions, $reponse1, $reponse2 , $reponse3, $reponse4 ,$validation);
        echo("okici");
    }
