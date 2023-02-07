<?php

require("../../../vendor/autoload.php");

use App\database\connection\userAccountDbConnection;

use App\database\connection\testExamsDbConnection;

use App\database\connection\testAndExamsResultDbConnection;

use App\database\connection\questionsDbConnection;

use App\models\userModel\fetchSpecificUserModel;

use App\models\createTestAndExamModel\createTestAndExamModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class createTestAndExamService{

    //db connections
    public $user_account_connect;
    
    public $test_exams_connect;

    public $test_exams_result_connect;

    public $questions_connect;


    public $session_status;

    public $user_session;

    public $create_test_and_exam_data_status;

    public $author;

    
    public $title;

    public $type;

    public $total_question;

    public $data_from_user;

    public $time_limit;


    public $status;

    public $test_exams_ref_id;

    public $date_created;

    public $time_created;


    public function fetchUserSession(){

        session_start();

        if(isset($_SESSION['login_session'])){

            $this->session_status = TRUE;

            $this->user_session = $_SESSION['login_session'];

        }else{

            $this->session_status = FALSE;

        }

    }

    public function fetchCreateTestAndExamData(){

        $post_data = file_get_contents("php://input");

        $data = json_decode($post_data);

        if(
            isset($data->title) && $data->title !== "" && 
            isset($data->type) && $data->type !== "" && 
            isset($data->totalQuestion) && $data->totalQuestion !== "" && 
            isset($data->dataFromUser) && $data->dataFromUser !== "" && 
            isset($data->timeLimit) && $data->timeLimit !== ""
        ){

            $this->title = strip_tags($data->title);

            $this->type = strip_tags($data->type);

            $this->total_question = strip_tags($data->totalQuestion);

            $this->data_from_user = strip_tags($data->dataFromUser);

            $this->time_limit = strip_tags($data->timeLimit);


            $this->create_test_and_exam_data_status = TRUE;

        }else{

            $this->create_test_and_exam_data_status = FALSE;

        }

        /*if(
            isset($_POST['title']) && $_POST['title'] !== "" && 
            isset($_POST['type']) && $_POST['type'] !== "" && 
            isset($_POST['totalQuestion']) && $_POST['totalQuestion'] !== "" && 
            isset($_POST['dataFromUser']) && $_POST['dataFromUser'] !== "" && 
            isset($_POST['timeLimit']) && $_POST['timeLimit'] !== ""
        ){

            $this->title = strip_tags($_POST['title']);

            $this->type = strip_tags($_POST['type']);

            $this->total_question = strip_tags($_POST['totalQuestion']);

            $this->data_from_user = strip_tags($_POST['dataFromUser']);

            $this->time_limit = strip_tags($_POST['timeLimit']);


            $this->create_test_and_exam_data_status = TRUE;

        }else{

            $this->create_test_and_exam_data_status = FALSE;

        }*/



    }

    public function dbConnections(){

        //user account db connection
        $user_account_db_connection = new userAccountDbConnection();
        $user_account_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_users","mysqli");
        $this->user_account_connect = $user_account_db_connection->user_account_conn;

        //test and exams db connection
        $test_exams_db_connection = new testExamsDbConnection();
        $test_exams_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_exam","mysqli");
        $this->test_exams_connect = $test_exams_db_connection->test_exams_conn;

        //test and exams result db connection
        $test_and_exam_result_db_connection = new testAndExamsResultDbConnection();
        $test_and_exam_result_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_and_exam_result","mysqli");
        $this->test_exams_result_connect = $test_and_exam_result_db_connection->test_and_exams_result_conn;

        //questions db connection
        $question_db_connection = new questionsDbConnection();
        $question_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"ctb_x_questions","mysqli");
        $this->questions_connect = $question_db_connection->question_conn;

    }

    public function runFetchSpecificUserModel(){
        
        $fetch_specific_user_model = new fetchSpecificUserModel();

        $fetch_specific_user_model->fetchSpecificUserQuery(
            $this->user_account_connect,
            $this->user_session
        );

        $fetch_specific_user_model->cacheQuery();

        $this->author = $fetch_specific_user_model->username;
        
        /*$result = array([
            'title' => $this->user_name
        ]);
        
        echo json_encode($result);
        */

    }

    public function generateBackgroundData(){

        $this->status = "active";

        $this->test_exams_ref_id = substr(rand(), 0, -6);

        $this->date_created = date("Y/m/d");

        $this->time_created = date("h:i:sa");

    }

    public function runCreateTestAndExamModel(){

        $create_test_and_exam_model = new createTestAndExamModel();

        $create_test_and_exam_model->createQuestionsTable(
            $this->questions_connect,
            $this->test_exams_ref_id
        );

        
        $create_test_and_exam_model->createResultTable(
            $this->test_exams_result_connect,
            $this->test_exams_ref_id
        );

        $create_test_and_exam_model->insertIntoTestExamsTable(
            $this->test_exams_connect,
            $this->test_exams_connect->real_escape_string($this->title),
            $this->test_exams_connect->real_escape_string($this->type),
            $this->test_exams_connect->real_escape_string($this->total_question),
            $this->test_exams_connect->real_escape_string($this->time_limit),
            $this->test_exams_connect->real_escape_string($this->status),
            $this->test_exams_connect->real_escape_string($this->test_exams_ref_id),
            $this->test_exams_connect->real_escape_string($this->author),
            $this->test_exams_connect->real_escape_string($this->user_session),
            $this->test_exams_connect->real_escape_string($this->date_created),
            $this->test_exams_connect->real_escape_string($this->time_created),
            $this->test_exams_connect->real_escape_string($this->data_from_user)
        );

        if($create_test_and_exam_model->insert_into_test_exams_table_status === TRUE){

            $result = array([
                'errorStatus' => FALSE,
                'successStatus' => TRUE,
                'message' => "$this->type Successfully Created",
                'ref_id' => $this->test_exams_ref_id
            ]);
        
            echo json_encode($result);

        }else{

            $result = array([
                'successStatus' => FALSE,
                'errorStatus' => TRUE,
                'message' => "Could not create '.$this->type.'",
            ]);
            
            echo json_encode($result);

        }
        

    }

    public function closeDbConnections(){

        mysqli_close($this->user_account_connect);
        mysqli_close($this->test_exams_connect);
        mysqli_close($this->test_exams_result_connect);
        mysqli_close($this->questions_connect);


    }

}

$create_test_and_exam_service = new createTestAndExamService();

$create_test_and_exam_service->fetchUserSession();

if($create_test_and_exam_service->session_status === TRUE){

    $create_test_and_exam_service->fetchCreateTestAndExamData();

    if($create_test_and_exam_service->create_test_and_exam_data_status === TRUE){

        $create_test_and_exam_service->dbConnections();

        $create_test_and_exam_service->runFetchSpecificUserModel();

        $create_test_and_exam_service->generateBackgroundData();

        $create_test_and_exam_service->runCreateTestAndExamModel();

        $create_test_and_exam_service->closeDbConnections();

    }else{

        $result = array([
            'successStatus' => FALSE,
            'errorStatus' => TRUE,
            'message' => "Could not create, You did not fill 
            all the forms",
        ]);
        
        echo json_encode($result);

    }

}

?>