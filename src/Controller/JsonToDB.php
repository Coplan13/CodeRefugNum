<?php

include_once(__DIR__.'/../Model/ModelManager.php');


function JsonToDb()
{

    $jsonFile = file_get_contents(__DIR__.'/../Ressources/json/Questions.json');

        $data = json_decode($jsonFile, true);

        $count = count($data['data']);


        for( $i = 0; $i < $count ; $i++)
            {
                $questions  = $data['data'][$i]['questions'];
                $reponse1  = $data['data'][$i]['reponse1'];
                $reponse2  = $data['data'][$i]['reponse2'];
                $reponse3  = $data['data'][$i]['reponse3'];
                $reponse4  = $data['data'][$i]['reponse4'];
                $validation = $data['data'][$i]['BonneRep'];

                AddQuestion( $questions, $reponse1, $reponse2 , $reponse3, $reponse4 ,$validation);

            }

}

function AddQuestion( $questions, $reponse1, $reponse2 , $reponse3, $reponse4 ,$validation)

    {
        $manager = new ModelManager();
        
        $manager -> addQuestions($questions, $reponse1, $reponse2 , $reponse3, $reponse4 ,$validation);
        
    }
