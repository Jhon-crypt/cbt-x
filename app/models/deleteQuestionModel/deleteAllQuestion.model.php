<?php

namespace App\models\deleteQuestionModel;

class deleteAllQuestionModel{

    public function deleteAllQuestionFromdB(
        $connection,$testExamId
    ){

        $statement = "DELETE FROM questions_of_".$testExamId."";

        if($connection->query($statement) === TRUE){

            $result = array([
                'statement' => "All Questions Deleted"
            ]);

            echo json_encode($result);

        }else{

            $result = array([
                'statement' => "Could Not Delete All Questions"
            ]);

            echo json_encode($result);

        }

    }

}

?>