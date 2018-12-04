<?php

include_once(__DIR__.'/../Model/ModelManager.php');
$manager = new ModelManager();
$questions = $manager -> getQuestions();
echo($questions);


