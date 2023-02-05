<?php

namespace App\models\submitUserInfoModel;

class submitUserInfoModel{

    public $create_user_result_table_status;

    public $insert_into_test_result_table_status;

    public function createUserResultTable($connection,$user_id,$test_id){

        $statement = "CREATE TABLE test_".$test_id."_result_of_".$user_id."
        (
            id int NOT NULL AUTO_INCREMENT,
            question_id text,
            question_status text,
            PRIMARY KEY(id)
        )";

        if($connection->query($statement) === TRUE){

            $this->create_user_result_table_status = TRUE;

        }else{

            $this->create_user_result_table_status = FALSE;
        }

    }

    public function insertIntoTestResultTable(
        $connection,$test_id,$user_info,$score,$user_ref_id){
    
        if($this->create_user_result_table_status === TRUE){

            $statement = $connection->prepare(" INSERT INTO result_of_".$test_id." 
            (
                info_from_user,score,ref_id
            ) 
            VALUES (?,?,?)
            ");

            $statement->bind_param(
                "sis",$user_info,$score,$user_ref_id
            );

            if($statement->execute()){

                $this->insert_into_test_result_table_status = TRUE;

            }else{

                $this->insert_into_test_result_table_status = FALSE;

            }

        }
    
    }
}

?>