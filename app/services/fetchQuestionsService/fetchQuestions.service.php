<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\questionsDbConnection;

use App\models\fetchQuestionsModel\fetchQuestionModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class fetchQuestionService{

    public $session_status;

    public $user_session;

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

    public function runFetchQuestionModel(){

        $fetch_question_model = new fetchQuestionModel();

        $fetch_question_model->fetchQuestionsFromDb(
            $this->questions_connect,
            $_SESSION['testExamId']
        );

        $fetch_question_model->cacheQuery();

        $fetch_question_model->queryResult();

    }

}

$fetch_question_service = new fetchQuestionService();

$fetch_question_service->fetchUserSession();

if($fetch_question_service->session_status === TRUE){

    $fetch_question_service->dbConnections();

    $fetch_question_service->runFetchQuestionModel();

}

?>