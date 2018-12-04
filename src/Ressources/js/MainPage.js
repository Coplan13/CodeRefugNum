
$(function() {
    // When click on Add :
    $('#add').click(function(e){

        // Don't reload the page
        e.preventDefault();
        
        // Variable
        var validInformation = true;
            // Ajax request
            $.post({
                url :'src/Controller/GetQuestions.php',
                
                success : function(code_html, data, statut){
                    
                    

                    
                   //json_encode($toJson)
                    /*$('.testResponse').append('<p class="reponse">'+ reponseBdd+'</p>');*/
                    
                    var listeDeQuestions = jQuery.parseJSON(code_html);
                    
                    console.log(listeDeQuestions[0][1]);
                    //$('.testResponse').append('<h1>'+ listeDeQuestions.question1.question+'</h1>');

                },
                error : function(resultat, statut, erreur){
                    console.log("error");
        
                }

            });
    });
});