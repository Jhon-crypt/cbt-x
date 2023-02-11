<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\testAndExamsResultDbConnection;

use App\models\fetchTestParticipatedUsersModel\countTestParticipatedUsersModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class countTestParticipatedUsers{

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

    public function runTestParticipatedUsersModel(){

        $count_test_users = new countTestParticipatedUsersModel();

        $count_test_users->countTestParticipatedUsers(
            $this->test_exams_result_connect,
            $_SESSION['testExamId']
        );

        $count_test_users->queryCache();

        $count_test_users->queryResult();

    }

}

$count_test_participated_users = new countTestParticipatedUsers();

$count_test_participated_users->fetchUserSession();

if($count_test_participated_users->session_status === TRUE){

    $count_test_participated_users->dbConnections();

    $count_test_participated_users->runTestParticipatedUsersModel();

}

?>