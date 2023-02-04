<?php

namespace App\models\submitUserInfoModel;

class submitUserInfoModel{

    public $create_user_result_table_status;

    public $insert_into_user_result_table_status;

    public function createUserResultTable($connection,$user_id,$test_id){

        $statement = "CREATE TABLE test_".$test_id."_result_of_".$user_id."
        (
            id int NOT NULL AUTO_INCREMENT,
            question_id text,
            question_status text,
            user_info text,
            PRIMARY KEY(id)
        )";

        if($connection->query($statement) === TRUE){

            $this->create_user_result_table_status = TRUE;

        }else{

            $this->create_user_result_table_status = FALSE;
        }

    }

    public function insertIntoUserResultTable(
        $connection,$user_id,$test_id,$question_id,$question_status,
        $user_info){
    
        if($this->create_user_result_table_status === TRUE){

            $statement = $connection->prepare(" INSERT INTO test_".$test_id."_result_of_".$user_id." 
            (
                question_id,question_status,user_info
            ) 
            VALUES (?,?,?)
            ");

            $statement->bind_param(
                "sss",$question_id,$question_status,$user_info
            );

            if($statement->execute()){

                $this->insert_into_user_result_table_status = TRUE;

            }else{

                $this->insert_into_user_result_table_status = FALSE;

            }

        }
    
    }
}

?>