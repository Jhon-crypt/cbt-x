<?php

namespace App\models\signupModel;

class signupModel{

    public function createUserTestExamTable($connection,$ref_id){

        $statement = "CREATE TABLE testExams_of_user_".$ref_id."
        (
            id int NOT NULL AUTO_INCREMENT,
            title text,
            type text,
            total_questions text,
            descriptions text,
            time_limit text,
            status text,
            ref_id text,
            author text,
            date_created text,
            time_created text,
            PRIMARY KEY(id)
        )";

        if($connection->query($statement)=== TRUE){

            echo "User text/exams table has been created";

        }else{

            echo "Could not create user test/exams table";

        }

    }

}

?>