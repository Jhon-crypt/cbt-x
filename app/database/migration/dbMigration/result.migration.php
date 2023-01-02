<?php

namespace App\database\migration\dbMigration;

class resultDbMigration{

    public $conn;

    public function connection($sever,$username,$password,$mysqli){

        $this->conn = new $mysqli($sever,$username,$password);

        if($this->conn->connect_error){

            echo "Could not Connect<br>";

        }else{

            echo "Connected<br>";

        }

    }

    public function createResultDatabase(){

        $statement = "CREATE DATABASE cbt_x_test_and_exam_result";

        if($this->conn->query($statement) === TRUE){

            echo "Database has been created";

        }else{

            echo "Could not create database";

        }

    }

}

?>