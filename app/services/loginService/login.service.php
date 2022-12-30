<?php

require("../../../vendor/autoload.php");

use App\database\connection\userAccountDbConnection;

use App\models\loginModel\loginModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class loginService{

    //db connections
    public $user_account_connect;

    public $login_data_status;

    public $email;

    public $password;

    public $encrypted_password;

    public function dbConnections(){

        //user account db connection
        $user_account_db_connection = new userAccountDbConnection();
        $user_account_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_users","mysqli");
        $this->user_account_connect = $user_account_db_connection->user_account_conn;

    }

    public function fetchLoginUserData(){

        $post_data = file_get_contents("php://input");

        $login_data = json_decode($post_data);

        if(isset($login_data->email) && $login_data->email !== "" 
        && isset($login_data->password) && $login_data->password !== ""){

            $this->login_data_status = TRUE;

            $this->email = strip_tags($login_data->email);

            $this->password = strip_tags($login_data->password);

            $this->encrypted_password = md5($this->password);

            /*
            $result = array([
                'loggedIn' => FALSE,
                'loginError' => TRUE
            ]);
        
            echo json_encode($result);
            */

        }else{

            $this->login_data_status = FALSE;

        }

    }

    public function runLoginModel(){

        $login_model = new loginModel();

        $login_model->loginThroughDb(
            $this->user_account_connect,
            $this->user_account_connect->real_escape_string($this->email),
            $this->user_account_connect->real_escape_string($this->encrypted_password)
        );

        $login_model->cacheLoginQuery();

        $login_model->updateUserStatus($this->user_account_connect);

        
        if($login_model->login_statement_status === TRUE){

            $result = array([
                'loggedIn' => TRUE,
                'loginError' => FALSE
            ]);

            echo json_encode($result);

        }elseif($login_model->login_statement_error === FALSE){

            $result = array([
                'loggedIn' => FALSE,
                'loginError' => TRUE
            ]);

            echo json_encode($result);

        }
        

    }

    public function closeDbConnections(){

        mysqli_close($this->user_account_connect);

    }

}

$login_service = new loginService();

$login_service->dbConnections();

$login_service->fetchLoginUserData();

if($login_service->login_data_status === TRUE){

    $login_service->runLoginModel();

    $login_service->closeDbConnections();

}else{



}

?>