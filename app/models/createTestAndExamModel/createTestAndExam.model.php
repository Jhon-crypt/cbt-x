<?php

namespace App\models\createTestAndExamModel;

class createTestAndExamModel{

    public $create_questions_table_status;

    public $create_result_table_status;

    public $insert_into_test_exams_table_status;

    public function createQuestionsTable($connection,$test_exams_ref_id){

        $statement = "CREATE TABLE questions_of_".$test_exams_ref_id."
        (
            id int NOT NULL AUTO_INCREMENT,
            question_title text,
            option_a text,
            option_b text,
            option_c text,
            option_d text,
            correct_answer text,
            PRIMARY KEY(id)
        )";

        if($connection->query($statement) === TRUE){

            $this->create_questions_table_status = TRUE;

        }else{

            $this->create_questions_table_status = FALSE;
        }
        
    }

    public function createResultTable($connection,$test_exams_ref_id){

        if($this->create_questions_table_status === TRUE){

            $statement = "CREATE TABLE result_of_".$test_exams_ref_id."
            (
            id int NOT NULL AUTO_INCREMENT,
            info_from_user text,
            score int,
            ref_id text
            PRIMARY KEY(id)
            )";

            if($connection->query($statement) === TRUE){

                $this->create_result_table_status = TRUE;

            }else{

                $this->create_result_table_status = FALSE;

            }

        }

    }

    public function insertIntoTestExamsTable(
        $connection,$ref_id,$title,$type,$total_questions,$time_limit,
        $status,$test_exams_ref_id,$author,$date_created,$time_created,$info_from_user
    ){

        if($this->create_result_table_status === TRUE){

            $statement = $connection->prepare(" INSERT INTO testExams_of_user_".$ref_id." 
            (
                title,type,total_questions,time_limit,status,ref_id,author,
                date_created,time_created,infoFromUser
            )
            VALUES (?,?,?,?,?,?,?,?,?)
            ");

            $statement->bind_param(
                "sssssssss",$title,$type,$total_questions,$time_limit,
                $status,$test_exams_ref_id,$author,$date_created,
                $time_created,$info_from_user
            );

            if($statement->execute()){

                $this->insert_into_test_exams_table_status = TRUE;

            }else{

                $this->insert_into_test_exams_table_status = FALSE;

            }

        }

    }

}

?>