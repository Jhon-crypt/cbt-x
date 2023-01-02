<?php

namespace App\database\connection;

class questionsDbConnection{

    public $question_conn;

    public function connection($sever,$username,$password,$database,$mysqli){

        $this->question_conn = new $mysqli($sever,$username,$password,$database);

        if($this->question_conn->connect_error){

            //echo "Could not Connect<br>";

        }else{

            //echo "Connected<br>";

        }

    }

}

?>