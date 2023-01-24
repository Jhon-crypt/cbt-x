<?php

namespace App\models\setQuestionsModel;

class setQuestionsModel{

    public $insert_into_questions_query_status;

    public function insertIntoQuestionsTable(
        $connection,$ref_id,$title,$optionA,$optionB,
        $optionC,$optionD,$correctOption
    ){

        $statement = $connection->prepare("INSERT INTO questions_of_".$ref_id." 
        (
            question_title,option_a,option_b,option_c,option_d,
            correct_answer
        )
        VALUES (?,?,?,?,?,?)
        ");

        $statement->bind_param(
            "ssssss",$title,$optionA,$optionB,
            $optionC,$optionD,$correctOption
        );

        if($statement->execute()){

            $this->insert_into_questions_query_status = TRUE;

        }else{

            $this->insert_into_questions_query_status = FALSE;

        }

    }

}

?>