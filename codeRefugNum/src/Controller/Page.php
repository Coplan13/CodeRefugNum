<?php

include_once(__DIR__.'/../Model/ModelManager.php');
require(__DIR__.'/JsonToDB.php');

function displayPage(){
    include(__DIR__.'/../View/MainPage.php'); 
    JsonToDb();

}




