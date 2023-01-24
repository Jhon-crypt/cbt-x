<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\questionsDbConnection;

use App\models\deleteQuestionModel\deleteAllQuestionModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class deleteAllQuestionService{

    public $session_status;

    public $user_session;

    public $question_query;

    public $delete_status;

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

    public function fetchQuestionQuery(){

        $post_data = file_get_contents("php://input");

        $data = json_decode($post_data);

        $this->question_query = $data->deleteQuery;

        if($this->question_query === "delete"){

            $this->delete_status = TRUE;

        }else{

            $this->delete_status = FALSE;

        }

    }

    public function runDeleteAllQuestionModel(){

        $delete_all_question_model = new deleteAllQuestionModel();

        $delete_all_question_model->deleteAllQuestionFromDb(
            $this->questions_connect,
            $_SESSION['testExamId']
        );

    }

}

$delete_all_question_service = new deleteAllQuestionService();

$delete_all_question_service->fetchUserSession();

if($delete_all_question_service->session_status === TRUE){

    $delete_all_question_service->dbConnections();

    $delete_all_question_service->fetchQuestionQuery();

    if($delete_all_question_service->delete_status === TRUE){

        $delete_all_question_service->runDeleteAllQuestionModel();

    }

}else{



}

?>