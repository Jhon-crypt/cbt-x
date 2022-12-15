<?php

namespace App\database\migration\tableMigration;

class userAccountTableMigration{

    public $conn;

    public function connection($sever,$username,$password,$database,$mysqli){

        $this->conn = new $mysqli($sever,$username,$password,$database);

        if($this->conn->connect_error){

            echo "Could not Connect<br>";

        }else{

            echo "Connected<br>";

        }

    }

    public function createUserAccountTable(){

        $statement = "CREATE TABLE user_account
        (
            id int NOT NULL AUTO_INCREMENT,
            email text,
            username text,
            password text,
            ref_id text,
            avatar text,
            date_created text,
            time_created text,
            status text,
            PRIMARY KEY(id)
        )";


        if($this->conn->query($statement) === TRUE){

            echo "User account table has been created";

        }else{

            echo "Could not create user account table";

        }

    }

}

?>