<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\testAndExamsResultDbConnection;

use App\models\fetchTestParticipatedUsersModel\fetchTestParticipatedModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class fetchTestParticipatedUsers{

    //db connections
    public $test_exams_result_connect;

    public $session_status;

    public $user_session;

    public function fetchUserSession(){

        if(isset($_SESSION['login_session'])){

            $this->session_status = TRUE;

            $this->user_session = $_SESSION['login_session'];

        }else{

            $this->session_status = FALSE;

        }

    }

    public function dbConnections(){

        //test and exams result db connection
        $test_and_exam_result_db_connection = new testAndExamsResultDbConnection();
        $test_and_exam_result_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_and_exam_result","mysqli");
        $this->test_exams_result_connect = $test_and_exam_result_db_connection->test_and_exams_result_conn;

    }

    public function runFetchTestParticipatedUsersModel(){

        $fetch_test_participated_model = new fetchTestParticipatedModel();

        $fetch_test_participated_model->fetchParticipatedUsers(
            $this->test_exams_result_connect,
            $_SESSION['testExamId']
        );

        $fetch_test_participated_model->cacheQuery();

        $fetch_test_participated_model->queryResult();

    }

}

$fetch_test_participated_users = new fetchTestParticipatedUsers();

$fetch_test_participated_users->fetchUserSession();

if($fetch_test_participated_users->session_status === TRUE){

    $fetch_test_participated_users->dbConnections();

    $fetch_test_participated_users->runFetchTestParticipatedUsersModel();

}

?>