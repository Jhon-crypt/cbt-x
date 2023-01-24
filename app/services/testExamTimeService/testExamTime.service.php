<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\testExamsDbConnection;
 
use App\models\testExamTimeModel\testExamTimeModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class testExamTime{

    public $session_status;

    public $user_session;

    //db connections
    public $test_exams_connect;

    public function fetchUserSession(){

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

    public function runTestExamTimeModel(){

        $test_exam_time_model = new testExamTimeModel();

        $test_exam_time_model->fetchTestExamTimeFromDb(
            $this->test_exams_connect,
            $_SESSION['testExamId'],
            $_SESSION['login_session']
        );
        

        /*$result = array([
            'timeLimit' => 10
        ]);

        echo json_encode($result);*/

    }

    public function closeDbConnections(){

        mysqli_close($this->test_exams_connect);

    }

}

$test_exam_time = new testExamTime();

$test_exam_time->fetchUserSession();

if($test_exam_time->session_status === TRUE){

    $test_exam_time->dbConnections();

    $test_exam_time->runTestExamTimeModel();

    $test_exam_time->closeDbConnections();

}

?>