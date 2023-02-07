<?php

require("../../../vendor/autoload.php");

use App\database\connection\testExamsDbConnection;

use App\models\fetchInfoFromUserModel\fetchInfoFromUserModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class fetchInfoFromUserService{

    public $session_status;

    public $user_session;

    public $test_exams_connect;

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

        //test and exams db connection
        $test_exams_db_connection = new testExamsDbConnection();
        $test_exams_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_exam","mysqli");
        $this->test_exams_connect = $test_exams_db_connection->test_exams_conn;


    }

    public function runFetchInfoFromUserModel(){

        $fetch_info_from_user = new fetchInfoFromUserModel();

        $fetch_info_from_user->fetchInfoFromUserInDb(
            $this->test_exams_connect,
            $_SESSION['testExamId']
        );

        $fetch_info_from_user->cacheQuery();

        $fetch_info_from_user->queryResult();

    }

    public function closeDbConnections(){

        mysqli_close($this->test_exams_connect);

    }


}

$fetch_info_from_user = new fetchInfoFromUserService();

$fetch_info_from_user->fetchUserSession();

if($fetch_info_from_user->session_status === TRUE){

    $fetch_info_from_user->dbConnections();

    $fetch_info_from_user->runFetchInfoFromUserModel();

    $fetch_info_from_user->closeDbConnections();

}

?>