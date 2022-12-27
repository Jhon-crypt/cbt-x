<?php

namespace App\database\connection;

class resetPasswordDbConnection{

    public $reset_password_conn;

    public function connection($sever,$username,$password,$database,$mysqli){

        $this->reset_password_conn = new $mysqli($sever,$username,$password,$database);

        if($this->reset_password_conn->connect_error){

            //echo "Could not Connect<br>";

        }else{

            //echo "Connected<br>";

        }

    }

}

?>