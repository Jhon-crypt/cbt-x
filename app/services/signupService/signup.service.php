<?php

require("../../../vendor/autoload.php");

use App\database\connection\userAccountDbConnection;

use App\database\connection\testExamsDbConnection;

use App\database\connection\resetPasswordDbConnection;

use App\models\signupModel\signupModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();


class signupService{

    //db connections
    public $user_account_connect;
    
    public $test_exams_connect;

    public $reset_password_connect;

    //sign up data
    public $email;

    public $gender;

    public $username;

    public $password;

    public $user_data_status;

    //auto generated data
    public $encrypted_password;

    public $ref_id;

    public $reset_password_code;

    public $avatar;

    public $date_created;

    public $time_created;

    public $status;

    public function dbConnections(){

        //user account db connection
        $user_account_db_connection = new userAccountDbConnection();
        $user_account_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_users","mysqli");
        $this->user_account_connect = $user_account_db_connection->user_account_conn;

        //test and exams db connection
        $test_exams_db_connection = new testExamsDbConnection();
        $test_exams_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_exam","mysqli");
        $this->test_exams_connect = $test_exams_db_connection->test_exams_conn;

        //reset password connection
        $reset_password_db_connection = new resetPasswordDbConnection();
        $reset_password_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_password_reset","mysqli");
        $this->reset_password_connect = $reset_password_db_connection->reset_password_conn;

    }

    public function fetchSignupUserData(){

        $post_data = file_get_contents("php://input");

        $sign_up_data = json_decode($post_data);

        if(isset($sign_up_data->email) && $sign_up_data->email !== "" 
        && isset($sign_up_data->gender) && $sign_up_data->gender!== "" 
        && isset($sign_up_data->username) && $sign_up_data->password !== "" ){

           $this->email =  $sign_up_data->email;

           $this->gender = $sign_up_data->gender;

           $this->username = $sign_up_data->username;

           $this->password = $sign_up_data->password;
           
           $this->user_data_status = TRUE;
        
           
           /*$result = array([
                'email' => $this->email,
                'gender' => $this->gender,
                'username' => $this->username,
                'password' => $this->password
            ]);
        
            echo json_encode($result);
            */ 
            

        }

    }


    public function sanitize($connection,$data){

        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = $connection->real_escape_string($data);

        return $data; 

    }

    
    public function sanitizeSignUpData(){

        
        $this->email = $this->sanitize(
            $this->user_account_connect,
            $this->email
        );

        $this->gender = $this->sanitize(
            $this->user_account_connect,
            $this->gender
        );

        $this->username = $this->sanitize(
            $this->user_account_connect,
            $this->username
        );

        $this->password = $this->sanitize(
            $this->user_account_connect,
            $this->password
        ); 
        
        //mysqli_close($connect);

    }

    public function generateBackendData(){

        $this->encrypted_password = md5($this->password);

        $this->ref_id = substr(rand(), 0, -6);

        $this->reset_password_code = md5($this->ref_id);

        $this->avatar = "./app/storage/avatar/nftt.png";

        $this->date_created = date("Y/m/d");

        $this->time_created = date("h:i:sa");

        $this->status = "new";

    }

    public function runSignupModel(){

        $signup_model = new signupModel();

        $signup_model->userResetPassword($this->reset_password_connect,$this->ref_id,$this->reset_password_code);

        $signup_model->userData(
            $this->user_account_connect,$this->email,$this->username,
            $this->encrypted_password,$this->ref_id,$this->avatar,
            $this->date_created,$this->time_created,$this->status
        );

    }

    public function closeDbConnections(){

        mysqli_close($this->user_account_connect);
        mysqli_close($this->test_exams_connect);
        mysqli_close($this->reset_password_connect);

    }

}

$signup_service = new signupService();

$signup_service->dbConnections();

$signup_service->fetchSignupUserData();

if($signup_service->user_data_status === TRUE){

    $signup_service->sanitizeSignUpData();

    $signup_service->generateBackendData();

    $signup_service->runSignupModel();

    $signup_service->closeDbConnections();

}else{

    

}

?>