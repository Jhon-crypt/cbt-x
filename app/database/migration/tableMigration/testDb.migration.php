<?php

namespace App\database\migration\tableMigration;

class testDbTableMigration{

    public $conn;

    public function connection($sever,$username,$password,$database,$mysqli){

        $this->conn = new $mysqli($sever,$username,$password,$database);

        if($this->conn->connect_error){

            echo "Could not Connect<br>";

        }else{

            echo "Connected<br>";

        }

    }

    public function createTestTable(){

        $statement = "CREATE TABLE testExams
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
            infoFromUser text,
            PRIMARY KEY(id)
        )";


        if($this->conn->query($statement) === TRUE){

            echo "test table has been created";

        }else{

            echo "Could not create test table";

        }

    }

}

?>