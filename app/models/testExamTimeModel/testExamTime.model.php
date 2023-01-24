<?php

namespace App\models\testExamTimeModel;

class testExamTimeModel{

    public function fetchTestExamTimeFromDb(
        $connection,$ref_id,$user_session
    ){

        $statement = "SELECT time_limit FROM testExams_of_user_".$user_session." WHERE 
        ref_id = '$ref_id'";

        $statement_result = $connection->query($statement);

        $statement_row = $statement_result->fetch_assoc();

        $time_limit = $statement_row['time_limit'];

        $result = array([
            'timeLimit' => $time_limit
        ]);

        echo json_encode($result);

    }

}

?>