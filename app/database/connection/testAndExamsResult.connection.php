<?php

namespace App\database\connection;

class testAndExamsResultDbConnection{

    public $test_and_exams_result_conn;

    public function connection($sever,$username,$password,$database,$mysqli){

        $this->test_and_exams_result_conn = new $mysqli($sever,$username,$password,$database);

        if($this->test_and_exams_result_conn->connect_error){

            //echo "Could not Connect<br>";

        }else{

            //echo "Connected<br>";

        }

    }

}

?>