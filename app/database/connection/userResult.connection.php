<?php

namespace App\database\connection;

class userResultDbConnection{

    public $user_result_conn;

    public function connection($sever,$username,$password,$database,$mysqli){

        $this->user_result_conn = new $mysqli($sever,$username,$password,$database);

        if($this->user_result_conn->connect_error){

            //echo "Could not Connect<br>";

        }else{

            //echo "Connected<br>";

        }

    }

}

?>