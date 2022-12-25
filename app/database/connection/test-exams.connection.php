<?php

namespace App\database\connection;

class testExamsDbConnection{

    public $test_exams_conn;

    public function connection($sever,$username,$password,$database,$mysqli){

        $this->test_exams_conn = new $mysqli($sever,$username,$password,$database);

        if($this->test_exams_conn->connect_error){

            echo "Could not Connect<br>";

        }else{

            echo "Connected<br>";

        }

    }

}

?>