<?php 


include_once(__DIR__.'/Manager.php');

class ModelManager extends Manager { 

    function getQuestions(){

        try {
<<<<<<< HEAD
            
            $db= $this->dbConnect();
            
            $questions = $db->prepare('SELECT * FROM questions_reponses;');
            $questions->execute();
    
            $reqs = $questions->fetchAll();
            $toArray = json_encode($reqs);
            
            //$toArray = $reqs;
            //var_dump($reqs);
            
            return $toArray;
      
=======
 
            $db= $this->dbConnect();
 
            $questions = $db->prepare('SELECT * FROM questions_reponses;');
            $questions->execute();
 
            $reqs = $questions->fetchAll();
            $toArray = json_encode($reqs);
 
            //$toArray = $reqs;
            //var_dump($reqs);
 
            return $toArray;
 
>>>>>>> 838375870b4ec46cdd7aa467ec44304950491178
        } catch (Exception $e) {
            echo('test');
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
<<<<<<< HEAD
    
=======
 
>>>>>>> 838375870b4ec46cdd7aa467ec44304950491178
    }

    function addQuestions($questions, $reponse1, $reponse2 , $reponse3, $reponse4 ,$validation) {

        try {
        $db= $this->dbConnect();
        

        $req = $db->prepare('INSERT INTO questions_reponses(questions, reponse1, reponse2 , reponse3, reponse4 , validation) 
<<<<<<< HEAD
        VALUES (?,?,?,?,?,?) ');
        $nouveauContact = $req->execute(array($questions, $reponse1, $reponse2 , $reponse3, $reponse4 ,$validation));
            
=======
        VALUES (?,?,?,?,?) ');
        $nouveauContact = $req->execute(array($questions, $reponse1, $reponse2 , $reponse3, $reponse4 ,$validation));

>>>>>>> 838375870b4ec46cdd7aa467ec44304950491178
        return $nouveauContact;

    } catch (Exception $e){
        echo $e->getMessage();
    }
    

    }

}