<?php

require("../vendor/autoload.php");

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../');
$env->load();

use App\database\connection\userAccountDbConnection;

use App\database\connection\testExamsDbConnection;

use App\database\connection\questionsDbConnection;

use App\database\connection\testAndExamsResultDbConnection;

class testingDatabaseConnection{

    public function testingUserAccountDbConnection(){

        $user_account_db_connection = new userAccountDbConnection();

        $user_account_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_users","mysqli");

    }

    public function testingTestExamsDbConnection(){

        $test_exams_db_connection = new testExamsDbConnection();

        $test_exams_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_exam","mysqli");

    }

    public function testingQuestionsDbConnection(){

        $question_db_connection = new questionsDbConnection();

        $question_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"ctb_x_questions","mysqli");

    }

    public function testAndExamsResultDbConnection(){

        $test_and_exam_result_db_connection = new testAndExamsResultDbConnection();

        $test_and_exam_result_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_and_exam_result","mysqli");

    }

}

$testing_database_connection = new testingDatabaseConnection();

//$testing_database_connection->testingUserAccountDbConnection();

//$testing_database_connection->testingTestExamsDbConnection();

//$testing_database_connection->testingQuestionsDbConnection();

$testing_database_connection->testAndExamsResultDbConnection();

?>