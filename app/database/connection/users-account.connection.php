<?php

namespace App\database\connection;

class userAccountDbConnection{

    public $user_account_conn;

    public function connection($sever,$username,$password,$database,$mysqli){

        $this->user_account_conn = new $mysqli($sever,$username,$password,$database);

        if($this->user_account_conn->connect_error){

            echo "Could not Connect<br>";

        }else{

            echo "Connected<br>";

        }

    }

}

?>