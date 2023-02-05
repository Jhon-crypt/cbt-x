<?php

namespace App\models\submitQuestionModel;

class submitQuestionModel{

    public function insertIntoUserResultQuestion(
        $connection,$user_id,$test_id,$question_id,$question_status
    ){

        $statement = $connection->prepare(" INSERT INTO test_".$test_id."_result_of_".$user_id." 
        (
            question_id,question_status
        ) 
        VALUES (?,?)
        ");

        $statement->bind_param(
            "ss",$question_id,$question_status
        );

        $statement->execute();
    

    }    

}

?>