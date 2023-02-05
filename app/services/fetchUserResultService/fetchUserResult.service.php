<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\testAndExamsResultDbConnection;

use App\models\fetchUserResultModel\fetchUserResultModel;


//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class fetchUserResult{

    public $test_exams_result_connect;

    public function dbConnections(){

        //test and exams result db connection
        $test_and_exam_result_db_connection = new testAndExamsResultDbConnection();
        $test_and_exam_result_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_and_exam_result","mysqli");
        $this->test_exams_result_connect = $test_and_exam_result_db_connection->test_and_exams_result_conn;
        
    } 

    public function runUserResultModel(){

        $fetch_user_result_model = new fetchUserResultModel();

        $fetch_user_result_model->fetchUserResult(
            $this->test_exams_result_connect,
            $_SESSION['testExamId'],
            $_SESSION['user_test_session']
        );

        $fetch_user_result_model->cacheQuery();

        $fetch_user_result_model->queryResult();
        
    }

}

$fetch_user_result = new fetchUserResult();

if(isset($_SESSION['user_test_session'])){

    $fetch_user_result->dbConnections();

    $fetch_user_result->runUserResultModel();

}

?>