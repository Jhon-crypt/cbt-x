<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\userResultDbConnection;

use App\database\connection\testAndExamsResultDbConnection;

use App\models\submitQuestionModel\submitQuestionModel;

use App\models\userResultModel\userResultModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class submitQuestion{

    //db connections
    public $user_result_connect;
    
    public $test_exams_result_connect;

    public $question1;

    public $question1Ans;

    public $question2;

    public $question2Ans;

    public $question3;

    public $question3Ans;

    public $question4;

    public $question4Ans;
            
    public $question5;

    public $question5Ans;

    public function fetchQuestionsData(){

        $this->question1 = strip_tags($_POST['question1']);

        $this->question1Ans = strip_tags(base64_decode($_POST['question1Ans']));

        $this->question2 = strip_tags($_POST['question2']);

        $this->question2Ans = strip_tags(base64_decode($_POST['question2Ans']));

        $this->question3 = strip_tags($_POST['question3']);

        $this->question3Ans = strip_tags(base64_decode($_POST['question3Ans']));

        $this->question4 = strip_tags($_POST['question4']);

        $this->question4Ans = strip_tags(base64_decode($_POST['question4Ans']));

        $this->question5 = strip_tags($_POST['question5']);

        $this->question5Ans = strip_tags(base64_decode($_POST['question5Ans']));

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

    public function submitQuestion1(){

        $submit_question_model = new submitQuestionModel();

        if($this->question1 === $this->question1Ans){

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 1",
                "correct"
            );

        }else{

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 1",
                "wrong"
            );

        }

    }

    public function submitQuestion2(){

        $submit_question_model = new submitQuestionModel();

        if($this->question2 === $this->question2Ans){

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 2",
                "correct"
            );

        }else{

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 2",
                "wrong"
            );

        }

    }

    public function submitQuestion3(){

        $submit_question_model = new submitQuestionModel();

        if($this->question3 === $this->question3Ans){

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 3",
                "correct"
            );

        }else{

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 3",
                "wrong"
            );

        }

    }

    public function submitQuestion4(){

        $submit_question_model = new submitQuestionModel();

        if($this->question4 === $this->question4Ans){

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 4",
                "correct"
            );

        }else{

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 4",
                "wrong"
            );

        }

    }

    public function submitQuestion5(){

        $submit_question_model = new submitQuestionModel();

        if($this->question5 === $this->question5Ans){

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 5",
                "correct"
            );

        }else{

            $submit_question_model->insertIntoUserResultQuestion(
                $this->user_result_connect,
                $_SESSION['user_test_session'],
                $_SESSION['testExamId'],
                "question 5",
                "wrong"
            );

        }

    }

    public function runUserResultModel(){

        $user_result_model = new userResultModel();

        $user_result_model->countUserResult(
            $this->user_result_connect,
            $_SESSION['user_test_session'],
            $_SESSION['testExamId']
        );

        $user_result_model->cacheQuery();

        $user_result_model->queryResult();

        //;

        $user_result_model->updateUserScoreInInTestDb(
            $this->test_exams_result_connect,
            $_SESSION['testExamId'],
            $user_result_model->result,
            $_SESSION['user_test_session']
        );

    }

    public function redirect(){

        header("location:http://localhost/wwwx/cbt-x/#!/end");
    }

}

$submitQuestion = new submitQuestion();

if(isset($_SESSION['user_test_session'])){

    $submitQuestion->fetchQuestionsData();

    $submitQuestion->dbConnections();

    $submitQuestion->submitQuestion1();

    $submitQuestion->submitQuestion2();

    $submitQuestion->submitQuestion3();

    $submitQuestion->submitQuestion4();

    $submitQuestion->submitQuestion5();

    $submitQuestion->runUserResultModel();

    $submitQuestion->redirect();

}

?>