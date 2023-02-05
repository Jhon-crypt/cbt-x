<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\userResultDbConnection;

use App\database\connection\testAndExamsResultDbConnection;

use App\models\submitUserInfoModel\submitUserInfoModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class submitUserInfo{

    //db connections
    public $user_result_connect;

    public $test_exams_result_connect;

    public $user_info;

    public $user_info_data_status;
    

    public $user_practice_session;

    public $score;

    public function fetchUserInfoData(){

        $post_data = file_get_contents("php://input");

        $data = json_decode($post_data);

        if(isset($data->userInfo) && $data->userInfo !== ""){

            $this->user_info = strip_tags($data->userInfo);

            $this->user_info_data_status = TRUE;

        }else{

            $this->user_info_data_status = FALSE;

        }

        /*if(isset($_POST['userInfo']) && $_GET['userInfo'] !== "" ){

            $this->user_info = strip_tags($_GET['userInfo']);

            $this->user_info_data_status = TRUE;

        }else{

            $this->user_info_data_status = FALSE;

        }*/
        
    }

    public function dbConnections(){

        //user result db connection
        $user_result_db_connection = new userResultDbConnection();
        $user_result_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_users_result","mysqli");
        $this->user_result_connect = $user_result_db_connection->user_result_conn;
    
        //test and exams result db connection
        $test_and_exam_result_db_connection = new testAndExamsResultDbConnection();
        $test_and_exam_result_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_and_exam_result","mysqli");
        $this->test_exams_result_connect = $test_and_exam_result_db_connection->test_and_exams_result_conn;

    }

    public function generateBackgroundData(){

        $_SESSION['user_test_session'] = substr(rand(), 0, -6);

        $this->user_practice_session = $_SESSION['user_test_session'];

        $this->score = 0;

    }

    public function runSubmitUserInfoModel(){

        $submit_user_info_model = new submitUserInfoModel();

        $submit_user_info_model->createUserResultTable(
            $this->user_result_connect,
            $this->user_practice_session,
            $_SESSION['testExamId']
        );

        $submit_user_info_model->insertIntoTestResultTable(
            $this->test_exams_result_connect,
            $_SESSION['testExamId'],
            $this->user_info,
            $this->score,
            $this->user_practice_session
        );

        if($submit_user_info_model->insert_into_test_result_table_status  === TRUE ){

            $result = array([
                'status' => TRUE,
                'message' => "Proceed To Test",
                'test_id' => $_SESSION['testExamId']
            ]);
        
            echo json_encode($result);

        }
    }

    public function closeDbConnections(){

        mysqli_close($this->user_result_connect,);

    }

}

$submit_user_info = new submitUserInfo();

$submit_user_info->fetchUserInfoData();

if($submit_user_info->user_info_data_status === TRUE){

    $submit_user_info->dbConnections();
    
    $submit_user_info->generateBackgroundData();

    $submit_user_info->runSubmitUserInfoModel();

    $submit_user_info->closeDbConnections();

}

?>