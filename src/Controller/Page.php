<?php

include_once(__DIR__.'/../Model/ModelManager.php');
include(__DIR__.'/JsonToDB');

function displayPage(){
    include(__DIR__.'/../View/MainPage.php'); 
    
    JsonToDb("QUESTIONS1 ", "REP1", "REP2", "REP3", "REP4" , "BonRep");
}




