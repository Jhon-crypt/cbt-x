<?php

require("../../../vendor/autoload.php");

use App\database\connection\testExamsDbConnection;

use App\models\testAndExamModel\testAndExamModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class testAndExamService{

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

        //test and exams db connection
        $test_exams_db_connection = new testExamsDbConnection();
        $test_exams_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_exam","mysqli");
        $this->test_exams_connect = $test_exams_db_connection->test_exams_conn;


    }

    public function runModel(){

        $test_and_exam_model = new testAndExamModel();

        $test_and_exam_model->fetchTestAndExamFromDb(
            $this->test_exams_connect,$this->user_session
        );

        $test_and_exam_model->cacheQuery();
        
        $test_and_exam_model->queryResult();

    }

    public function closeDbConnections(){

        mysqli_close($this->test_exams_connect);

    }

}

$test_and_exam_service = new testAndExamService();

$test_and_exam_service->fetchUserSession();

if($test_and_exam_service->session_status === TRUE){

    $test_and_exam_service->dbConnections();

    $test_and_exam_service->runModel();

    $test_and_exam_service->closeDbConnections();

}


?>