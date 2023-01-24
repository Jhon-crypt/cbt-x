<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\questionsDbConnection;

use App\models\setQuestionsModel\setQuestionsModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class createQuestions{

    public $session_status;

    public $user_session;


    //db connections
    public $questions_connect;


    public $title;

    public $optionA;

    public $optionB;

    public $optionC;

    public $optionD;

    public $test_exam_id;

    public $correct_option;

    public $set_questions_data_status;


    public function fetchUserSession(){

        if(isset($_SESSION['login_session'])){

            $this->session_status = TRUE;

            $this->user_session = $_SESSION['login_session'];

        }else{

            $this->session_status = FALSE;

        }

    }

    public function fetchSetQuestionsData(){

        $post_data = file_get_contents("php://input");

        $questions = json_decode($post_data);

        if(
            isset($questions->title) && $questions->title !== "" && 
            isset($questions->optionA) && $questions->optionA !== "" && 
            isset($questions->optionB) && $questions->optionB !== "" && 
            isset($questions->optionC) && $questions->optionC !== "" && 
            isset($questions->optionD) && $questions->optionD !== "" && 
            isset($questions->correctOption) && $questions->correctOption !== ""
        ){

            $this->title = strip_tags($questions->title);

            $this->optionA = strip_tags($questions->optionA);

            $this->optionB = strip_tags($questions->optionB);

            $this->optionC = strip_tags($questions->optionC);

            $this->optionD = strip_tags($questions->optionD);

            $this->test_exam_id = $_SESSION['testExamId'];

            $this->correct_option = strip_tags($questions->correctOption);

            $this->set_questions_data_status = TRUE;

        }
    

    }

    public function dbConnections(){

        //questions db connection
        $question_db_connection = new questionsDbConnection();
        $question_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"ctb_x_questions","mysqli");
        $this->questions_connect = $question_db_connection->question_conn;

    }

    public function runSetQuestionsModel(){

        $set_questions_model = new setQuestionsModel();

        $set_questions_model->insertIntoQuestionsTable(
            $this->questions_connect,
            $this->test_exam_id,
            $this->questions_connect->real_escape_string($this->title),
            $this->questions_connect->real_escape_string($this->optionA),
            $this->questions_connect->real_escape_string($this->optionB),
            $this->questions_connect->real_escape_string($this->optionC),
            $this->questions_connect->real_escape_string($this->optionD),
            $this->questions_connect->real_escape_string($this->correct_option),
        );

        if($set_questions_model->insert_into_questions_query_status === TRUE){

            $result = array([
                'errorStatus' => FALSE,
                'successStatus' => TRUE,
                'message' => "Question Created, Reloading page..."
            ]);
    
            echo json_encode($result);

        }else{

            $result = array([
                'errorStatus' => TRUE,
                'successStatus' => FALSE,
                'message' => "Could Not Create Question"
            ]);
    
            echo json_encode($result);

        }

    }

    public function closeDbConnections(){

        mysqli_close($this->questions_connect);

    }

}

$create_questions = new createQuestions();

$create_questions->fetchUserSession();

if($create_questions->session_status === TRUE){

    $create_questions->fetchSetQuestionsData();

    if($create_questions->set_questions_data_status === TRUE){

        $create_questions->dbConnections();

        $create_questions->runSetQuestionsModel();

        $create_questions->closeDbConnections();

    }else{

        $result = array([
            'errorStatus' => TRUE,
            'successStatus' => FALSE,
            'message' => "Could not create question"
        ]);
    
        echo json_encode($result); 

    }

}

?>