<?php

namespace App\models\deleteQuestionModel;

class deleteQuestionModel{

    public $delete_question_status;

    public function deleteQuestionFromDb(
        $connection,$testExamId,$questionId
    ){

        $statement = "DELETE FROM questions_of_".$testExamId." WHERE 
        id = $questionId";

        if($connection->query($statement)=== TRUE){

            $this->delete_question_status = TRUE;

        }else{

            $this->delete_question_status = FALSE;

        }

    }

    public function reorderQuestionTable(
        $connection,$testExamId,$questionId
    ){

        if($this->delete_question_status === TRUE){

            $statement = "ALTER TABLE questions_of_".$testExamId."  
            AUTO_INCREMENT = $questionId";

            if($connection->query($statement)=== TRUE){

                $result = array([
                    'statement' => "Question $questionId Deleted"
                ]);

                echo json_encode($result);
    
            }else{
    
                $result = array([
                    'statement' => "Could Not Delete Question $questionId"
                ]);

                echo json_encode($result);
    
            }

        }

    }

}

?>