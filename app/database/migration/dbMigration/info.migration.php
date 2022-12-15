<?php

namespace App\database\migration\dbMigration;

class infoDbMigration{

    public $conn;

    public function connection($sever,$username,$password,$mysqli){

        $this->conn = new $mysqli($sever,$username,$password);

        if($this->conn->connect_error){

            echo "Could not Connect<br>";

        }else{

            echo "Connected<br>";

        }

    }

    public function createInfoDatabase(){

        $statement = "CREATE DATABASE cbt_x_info_from_user";

        if($this->conn->query($statement) === TRUE){

            echo "Database  has been created";

        }else{

            echo "Could not create database";

        }

    }
}

?>