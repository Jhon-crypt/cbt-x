<?php

namespace App\database\migration\tableMigration;

class resetPasswordTableMigration{

    public $conn;

    public function connection($sever,$username,$password,$database,$mysqli){

        $this->conn = new $mysqli($sever,$username,$password,$database);

        if($this->conn->connect_error){

            echo "Could not Connect<br>";

        }else{

            echo "Connected<br>";

        }

    }

    public function createResetPasswordTable(){

        $statement = "CREATE TABLE reset_password
        (
            id int NOT NULL AUTO_INCREMENT,
            ref_id text,
            reset_code text,
            PRIMARY KEY(id)
        )";

        if($this->conn->query($statement) === TRUE){

            echo "Reset password table has been created";

        }else{

            echo "Could not create reset password table";

        }

    }

}

?>