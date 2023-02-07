<?php

namespace App\models\signupModel;

class signupModel{

    
    public function userResetPassword($connection,$ref_id,$reset_code){

        $statement = $connection->prepare(" INSERT INTO reset_password 
        (
            ref_id, reset_code
        ) 
        VALUES (?,?)
        ");

        $statement->bind_param("ss",$ref_id,$reset_code);

        $statement->execute();

    }

    public function userData(
        $connection,$email,$username,$password,$ref_id,
        $avatar,$date_created,$time_created,$status
    ){

        $statement = $connection->prepare(" INSERT INTO user_account 
        (
            email,username,password,ref_id,avatar,date_created,
            time_created,status
        )
        VALUES(?,?,?,?,?,?,?,?)
        ");

        $statement->bind_param("ssssssss",$email,$username,$password,
        $ref_id,$avatar,$date_created,$time_created,$status);

        $statement->execute();

    }

}

?>