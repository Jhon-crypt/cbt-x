<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\questionsDbConnection;

use App\models\deleteQuestionModel\deleteQuestionModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class deleteQuestionService{

    public $session_status;

    public $user_session;

    public $question_id;

    //db connections
    public $questions_connect;

    public function fetchUserSession(){

        if(isset($_SESSION['login_session'])){

            $this->session_status = TRUE;

            $this->user_session = $_SESSION['login_session'];

        }else{

            $this->session_status = FALSE;

        }

    }

    public function dbConnections(){

        //questions db connection
        $question_db_connection = new questionsDbConnection();
        $question_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"ctb_x_questions","mysqli");
        $this->questions_connect = $question_db_connection->question_conn;

    }

    public function fetchQuestionId(){

        $post_data = file_get_contents("php://input");

        $data = json_decode($post_data);

        $this->question_id = $data->deleteQuestionId;

        /*$result = array([
            'questionId' => $data->deleteQuestionId
        ]);
        */

        //echo json_encode($result);


    }

    public function runDeleteQuestionModel(){

        $delete_question_model = new deleteQuestionModel();

        $delete_question_model->deleteQuestionFromDb(
            $this->questions_connect,
            $_SESSION['testExamId'],
            $this->question_id
        );

        $delete_question_model->reorderQuestionTable(
            $this->questions_connect,
            $_SESSION['testExamId'],
            $this->question_id
        );

    }

}

$delete_question_service = new deleteQuestionService();

$delete_question_service->fetchUserSession();

if($delete_question_service->session_status === TRUE){

    $delete_question_service->dbConnections();

    $delete_question_service->fetchQuestionId();

    $delete_question_service->runDeleteQuestionModel();

}

?>