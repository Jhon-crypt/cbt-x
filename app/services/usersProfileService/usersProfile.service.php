<?php

require("../../../vendor/autoload.php");

use App\database\connection\userAccountDbConnection;

use App\models\usersProfileModel\usersProfileModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class userProfile{

    //db connections
    public $user_account_connect;

    public $session_status;

    public $user_session;

    public function fetchUserSession(){

        session_start();

        if(isset($_SESSION['login_session'])){

            $this->session_status = TRUE;

            $this->user_session = $_SESSION['login_session'];

        }else{

            $this->session_status = FALSE;

        }

    }

    public function dbConnections(){

        //user account db connection
        $user_account_db_connection = new userAccountDbConnection();
        $user_account_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_users","mysqli");
        $this->user_account_connect = $user_account_db_connection->user_account_conn;

    }

    public function runUsersProfileModel(){

        $users_profile_model = new usersProfileModel();

        $users_profile_model->fetchUsersProfile(
            $this->user_account_connect,
            $this->user_session
        );

        $users_profile_model->cacheQuery();

        $users_profile_model->queryResult();


    }

}

$user_profile = new userProfile();

$user_profile->fetchUserSession();

if($user_profile->session_status === TRUE){

    $user_profile->dbConnections();

    $user_profile->runUsersProfileModel();

}

?>