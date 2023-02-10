<?php

session_start();

require("../../../vendor/autoload.php");

use App\database\connection\testExamsDbConnection;

use App\models\searchResultModel\searchResultModel;

//loading env variables
$env = Dotenv\Dotenv::createImmutable('../../../');
$env->load();

class searchTest{
    
    public $search_value;

    public $search_value_status;

    public $test_exams_connect;

    public function fetchUserSearchValue(){

        $post_data = file_get_contents("php://input");

        $data = json_decode($post_data);

        if(isset($data->searchValue) && $data->searchValue !== "" ){

            $this->search_value = strip_tags($data->searchValue);

            $this->search_value_status = TRUE;


        }else{

            $this->search_value_status = FALSE;

        }

        //uncomment when testing this service with postman
        /*if(isset($_POST['searchValue']) && $_GET['searchValue'] !== "" ){

            $this->search_value = strip_tags($_POST['searchValue']);

            $this->search_value_status = TRUE;

        }else{

            $this->search_value_status = FALSE;

        }*/

    }

    public function dbConnections(){

        //test and exams db connection
        $test_exams_db_connection = new testExamsDbConnection();
        $test_exams_db_connection->connection($_SERVER['server_name'],$_SERVER['username'],$_ENV['password'],"cbt_x_test_exam","mysqli");
        $this->test_exams_connect = $test_exams_db_connection->test_exams_conn;

    }

    public function runSearchTestModel(){

        $search_test_result_model = new searchResultModel();

        $search_test_result_model->fetchTestExamQuery(
            $this->test_exams_connect,
            $this->test_exams_connect->real_escape_string($this->search_value)
        );

        $search_test_result_model->cacheQuery();

        $search_test_result_model->queryResult();

    }

}

$search_test = new searchTest();

$search_test->fetchUserSearchValue();

if($search_test->search_value_status === TRUE){

    $search_test->dbConnections();

    $search_test->runSearchTestModel();

}

?>